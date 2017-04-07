<?php

namespace BJ\LinksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BJLinksBundle:Default:index.html.twig');
    }
}
