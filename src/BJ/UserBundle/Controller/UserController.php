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

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class UserController extends Controller
{
    /**
     * @Route("/signup", name="signup")
     */
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

            // Ensuite, l'utilisateur est automatiquement connecté
            // et redirigé vers la même page que lors d'un login classique
            // Doc : https://knpuniversity.com/screencast/symfony-security/automatic-login-handling
            return $this->get('security.authentication.guard_handler')
                ->authenticateUserAndHandleSuccess(
                    $user,
                    $request,
                    $this->get('bj.form.form_authenticator'),
                    'main'
                );
        }

        return $this->render('user/signup.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
