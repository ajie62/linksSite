<?php
/**
 * Created by PhpStorm.
 * User: aigie
 * Date: 10/04/2017
 * Time: 07:45
 */

namespace BJ\UserBundle\Controller;


use BJ\UserBundle\Entity\User;
use BJ\UserBundle\Form\Type\SignupType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function signupAction(Request $request)
    {
        // On crée un nouvel objet utilisateur
        $user = new User();

        // On crée le formulaire d'inscription
        $form = $this->get('form.factory')->create(SignupType::class, $user);
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide, alors on enregistre le nouvel utilisateur en bdd
        if ($form->isSubmitted() && $form->isValid()) {
            // Mais avant, on commence par encoder le mdp
            $encoder = $this->get('security.password_encoder');
            $password = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }

        return $this->render('user/signup.html.twig', array(
            'form' => $form
        ));
    }
}
