<?php
/**
 * Created by PhpStorm.
 * User: aigie
 * Date: 08/04/2017
 * Time: 14:32
 */

namespace BJ\UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        //TODO définir vue login
        return $this->render('', array(
            'last_username' => $lastUsername,
            'error'         => $error
        ));
    }
}
