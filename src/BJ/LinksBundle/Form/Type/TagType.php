<?php
/**
 * Created by PhpStorm.
 * User: aigie
 * Date: 16/04/2017
 * Time: 09:25
 */

namespace BJ\LinksBundle\Form\Type;


use BJ\LinksBundle\Form\DataTransformer\TagsTransformer;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\Form\DataTransformer\CollectionToArrayTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TagType extends AbstractType
{
    private $om;

    public function __construct(ObjectManager $manager)
    {
        $this->om = $manager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->addModelTransformer(new CollectionToArrayTransformer(), true)
            ->addModelTransformer(new TagsTransformer($this->om), true);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('attr', [
            'class' => 'input-tags'
        ]);
        $resolver->setDefault('required', false);
    }

    public function getParent()
    {
        return TextType::class;
    }
}
