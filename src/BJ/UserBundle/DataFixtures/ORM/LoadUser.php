<?php
/**
 * Created by PhpStorm.
 * User: aigie
 * Date: 10/04/2017
 * Time: 20:13
 */

namespace BJ\UserBundle\DataFixtures\ORM;


use BJ\UserBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUser implements FixtureInterface, ContainerAwareInterface
{
    private $container;
    
    /**
     * Sets the container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        // On crée un nouvel utilisateur
        $admin = new User();

        // On définit son pseudo, son email et son rôle
        $admin
            ->setUsername('admin')
            ->setEmail('test@example.com')
            ->setRoles(array('ROLE_ADMIN'));

        // On encode le mdp
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($admin, 'admin');

        // On définit le mdp encodé
        $admin->setPassword($password);

        // On persiste et on flush en bdd
        $manager->persist($admin);
        $manager->flush();
    }
}
