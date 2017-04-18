<?php
/**
 * Created by PhpStorm.
 * User: aigie
 * Date: 16/04/2017
 * Time: 09:25
 */

namespace BJ\LinksBundle\Form\Type;


use BJ\LinksBundle\Form\DataTransformer\TagsTransformer;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Form\DataTransformer\CollectionToArrayTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TagType extends AbstractType
{
    private $em;

    public function __construct(EntityManager $manager)
    {
        $this->em = $manager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // http://symfony.com/doc/current/form/data_transformers.html
        // Ici, on ne va pas utiliser un formulaire "classique". En effet, les Tags sont une ArrayCollection,
        // on aurait donc pu utiliser un CollectionType. Cependant, on veut donner un peu plus de style à notre champs tags
        // grâce à JavaScript, et on va avoir besoin d'un champ de type Text. Il va donc falloir qu'on transforme les données :
        $builder
            // D'abord d'une collection d'objets vers un tableau classique
            ->addModelTransformer(new CollectionToArrayTransformer(), true)
            // Puis d'un tableau vers une chaîne de caractères personnalisée :
            ->addModelTransformer(new TagsTransformer($this->em), true);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        // Par défaut, on définit le champ pour les tags comme non obligatoire,
        // et on lui attribue une classe pour pouvoir facilement cibler avec JS
        $resolver->setDefault('attr', [
            'class' => 'input-tags'
        ]);
        $resolver->setDefault('required', false);
    }

    public function getParent()
    {
        // La méthode getParent permet d'expliciter le type que l'on va utiliser, ici, un TextType
        return TextType::class;
    }
}
