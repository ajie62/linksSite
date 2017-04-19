<?php

namespace BJ\LinksBundle\Controller;

use BJ\LinksBundle\Form\Type\LinkType;
use BJ\LinksBundle\Form\Type\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BJ\LinksBundle\Entity\Link;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class LinksController extends Controller
{
    /**
     * @Route("/", name="home")
     */
	public function indexAction(Request $request)
	{
	    $em = $this->getDoctrine()->getManager();
	    $repository = $em->getRepository('BJLinksBundle:Link');

        if ($tag = $request->query->get('tag')) {
            dump($tag);
            $links = $repository->findByTag($tag);
        } else {
           $links = $repository->findLatest();
        }
        dump($links);
		return $this->render('links/index.html.twig', array(
		    'links' => $links
        ));
	}

	//TODO définir la sécurité pour cette page
    /**
     * @Route("/links", name="links")
     */
    public function viewAction()
    {
        $links = $this->getDoctrine()
            ->getRepository('BJLinksBundle:Link')
            ->findByAuthor($this->getUser());
        return $this->render('links/view.html.twig', array(
            'links' => $links
        ));
    }

    // L'annotation @Security permet de contrôler l'accès à la page : ici, si l'utilisateur n'a pas au moins le rôle
    // utilisateur (donc, n'est pas connecté) alors il sera redirigé vers la page login
    /**
     * @Route("/add-link", name="add_link")
     * @Security("has_role('ROLE_USER')")
     */
	public function addAction(Request $request)
    {
        // On commence par créer un nouveau lien
        $link = new Link();

        // Puis on crée un formulaire associé à ce nouvel objet "lien"
        $form = $this->get('form.factory')->create(LinkType::class, $link);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Si le formulaire est soumis et valide, alors on récupère l'utilisateur connecté pour le définir comme auteur
            $author = $this->getUser();
            $link->setAuthor($author);
            // puis on enregistre le lien dans la bdd
            $em = $this->getDoctrine()->getManager();
            $em->persist($link);
            $em->flush();

            // On ajoute un message flash et on redirige vers l'accueil
            $this->addFlash('notice', 'Le lien a été ajouté.');
            return $this->redirectToRoute('home');
        }

        // Au chargement de la page, on a besoin de la liste des tags déjà existants pour faire des suggestions à l'utilisateurs
        $tags = $this->getDoctrine()->getManager()->getRepository('BJLinksBundle:Tag')->findAll();

        return $this->render('links/add.html.twig', array(
            'form' => $form->createView(),
            'tags' => $tags
        ));
    }
}
