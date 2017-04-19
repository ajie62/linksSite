<?php
/**
 * Created by PhpStorm.
 * User: aigie
 * Date: 19/04/2017
 * Time: 09:09
 */

namespace BJ\AppBundle\Form\Extension;


use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

// Cette extension va nous permettre d'ajouter simplement une option "help" à tous nos champs de formulaire
class HelpFormExtension extends AbstractTypeExtension
{

    /**
     * Returns the name of the type being extended.
     *
     * @return string The name of the type being extended
     */
    public function getExtendedType()
    {
        // On indique le type concerné : ici, tous (sauf SubmitType)
        return FormType::class;
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        // Si 'help' est défini, alors on l'ajoute à la vue du formulaire,
        // avec pour valeur ce qui a été défini dans la construction du formulaire
        if ($options['help']) {
            $view->vars['help'] = $options['help'];
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        // Par défaut, 'help' est à null, donc, si on n'a pas 'help' => '...' dans la construction de notre formulaire,
        // rien ne s'affichera.
        $resolver->setDefault('help', null);
    }
}
