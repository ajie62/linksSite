<?php
/**
 * Created by PhpStorm.
 * User: aigie
 * Date: 10/04/2017
 * Time: 09:11
 */

namespace BJ\UserBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class SignupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array(
                'required' => true,
                'constraints' => [
                    new NotBlank(array('message' => "Veuillez indiquer un pseudonyme.")),
                    new Length(array(
                        'min' => 2,
                        'max' => 25,
                        'minMessage' => "Votre pseudo doit comporter au moins {{ limit }} caractères.",
                        'maxMessage' => "Votre pseudo ne doit pas excéder {{ limit }} caractères."
                    ))
                ]
            ))
            ->add('email', EmailType::class, array(
                'required' => true,
                'constraints' => [
                    new NotBlank(array('message' => "Veuillez renseigner une adresse email.")),
                    new Email(array('message' => "Veuillez renseigner une adresse email valide."))
                ]
            ))
            // On utilise ici le type RepeatedType, qui va nous permettre de demander une confirmation du mot de passe
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => "Les mots de passe doivent être identiques.",
                'options' => array('attr' => array('class' => 'password-fiel')),
                'required' => true,
                'first_options' => array('label' => "Mot de passe"),
                'second_options' => array('label' => "Répéter votre mot de passe")
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BJ\UserBundle\Entity\User'
        ));
    }
}
