<?php
/**
 * Created by PhpStorm.
 * User: aigie
 * Date: 08/04/2017
 * Time: 13:27
 */

// Doc : http://symfony.com/doc/current/security/entity_provider.html
// Unicité : http://symfony.com/doc/current/reference/constraints/UniqueEntity.html

namespace BJ\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM; // Cette ligne permet d'utiliser les annontations @ORM
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity; // Cette ligne va permettre de poser une contrainte sur l'unicité des champs username et email

/**
 * Class User
 * @package BG\UserBundle\Entity
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="BJ\UserBundle\Repository\UserRepository")
 * @UniqueEntity(fields="username", message="Ce pseudo est déjà utilisé.")
 * @UniqueEntity(fields="email", message="Il semblerait que vous soyez déjà inscrit.")
 */
class User implements UserInterface, \Serializable
{
    // Pour chacun des attributs, on utilise le mapping de Doctrine
    // pour définir le type de valeur, les contraintes de longueur, son unicité, etc.)
    // comme on le ferait si on ajoutait la colonne manuellement dans PHPMyAdmin
    // En faisant php bin/console doctrine:schema:update -f, la bdd sera mise à jour en prenant en compte
    // toutes les caractéristiques qu'on a indiquées.

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    // Pour le mdp, on définit une longueur maximale de 64 par rapport au cryptage
    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $email;

    // Voici le côté inverse de notre relation bidirectionnelle : on renseigne donc l'entité cible (Link), et on indique
    // l'attribut correspondant (author)
    /**
     * @ORM\OneToMany(targetEntity="BJ\LinksBundle\Entity\Link", mappedBy="author")
     */
    private $links;

    /**
     * @ORM\Column(name="roles", type="array")
     */
    private $roles = array();

    public function __construct()
    {
        // Par défaut, un utilisateur a le role de base : ROLE_USER
        $this->roles = array('ROLE_USER');
        $this->links = new ArrayCollection();
    }

    // GETTERS //

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    // Cette méthode découle de l'implémentation de UerInterface.
    // Ici, dans un premier temps, on se fie à la doc de SF
    public function getSalt()
    {
        return null;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function getLinks()
    {
        return $this->links;
    }

    // SETTERS //

    /**
     * @param array $roles
     * @return User
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    // Cette méthode est aussi imposée par UserInterface
    public function eraseCredentials()
    {
    }

    // Méthodes imposées par Serializable //

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->username,
            $this->password
            ) = unserialize($serialized);
    }
}
