<?php

namespace BJ\LinksBundle\Controller;

use BJ\LinksBundle\Form\Type\LinkType;
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

	public function addAction(Request $request)
    {
        // On commence par créer un nouveau lien
        $link = new Link();

        // Puis on crée un formulaire associé à ce nouvel objet "lien"
        $form = $this->get('form.factory')->create(LinkType::class, $link);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Si le formulaire est soumis et valide, alors on enregistre le lien dans la bdd
            $em = $this->getDoctrine()->getManager();
            $em->persist($link);
            $em->flush();

            // On ajoute un message flash et on redirige vers...
            $this->addFlash('notice', 'Le lien a été ajouté.');
            // TODO définir la redirection
            return $this->redirectToRoute('/');
        }

        return $this->render('links/add.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
