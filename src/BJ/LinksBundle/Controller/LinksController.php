<?php

namespace BJ\LinksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BJ\LinksBundle\Entity\Link;

class LinksController extends Controller
{
	public function indexAction()
	{
		return $this->render('BJLinksBundle:Links:index.html.twig');
	}

	public function viewAction()
	{
		return $this->render('BJLinksBundle:Links:view.html.twig');
	}
}