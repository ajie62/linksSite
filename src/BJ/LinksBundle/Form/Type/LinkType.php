<?php
/**
 * Created by PhpStorm.
 * User: aigie
 * Date: 08/04/2017
 * Time: 21:12
 */

namespace BJ\LinksBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Url;

class LinkType extends AbstractType
{
    // Ici, le nom de la méthode est transparent : on construit notre formulaire
    // en lui indiquant les différents champs, leur type, et éventuellement leurs options
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('url', UrlType::class, array(
                'required' => true,
                'constraints' => [
                    new NotBlank(array("message" => "L'URL est obligatoire.")),
                    new Url(array("message" => "Merci de renseigner une URL valide."))
                ]
            ))
            //TODO ajouter les autres champs nécessaires à la création d'un lien
            // Tu trouveras la liste des types disponibles ici : http://symfony.com/doc/current/forms.html#built-in-field-types
            // Pour les contraintes : http://symfony.com/doc/current/validation.html#basic-constraints
        ;
    }

    // Ici, on explicite l'entité liée au formulaire
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BJ\LinksBundle\Entity\Link'
        ));
    }
}
