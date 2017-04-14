Voici les ajouts/modifications apportés :
- UserBundle : 
    - se charge de l'authentification des utilisateurs ;
    - ! inscription d'un nouvel utilisateur
    - ! fix erreur unserialize
    - ! modification pour prendre en compte la relation avec Links
- LinksBundle : 
    - ajout d'un fichier .gitignore
    - suppression du dossier DependencyInjection, qui ne nous sera pas utile ici ;
    - dans l'entité Link : ajout de __construct, pour définir la date automatiquement à la création d'un nouveau lien ;
    - ajout de la route "add", du formulaire LinkType, et de la vue "add".
    - ! modification de l'entité pour mettre en place une relation bidirectionnelle avec User (pense à mettre à jour ta bdd) ;
    - ! modification de LinksController avec une simple méthode de récupération - la vue index.html.twig a été adaptée en conséquence ;
    - ! modification de addAction, pour prendre en compte l'auteur
    - ! prise en compte du statut authentifié/anonyme pour l'affichage de certains liens, mise en place d'un début de sécurité sur l'action "addLink"
- ! composer.json : ajout de la description
- ! dossier LinksBundle/Resources supprimé : ce bundle n'a pas vocation à être réutilisé. Donc, son routing et ses vues 
sont directement définis dans app/config/routing.yml et dans app/Resources/views
- ! appel des vues dans les contrôleurs : comme les vues ont été déplacées, pour les appeler, il faut faire _nom_du_dossier_/_nom_du_fichier_
(ex. : `links/index.html.twig`)
- ! routing : les routes sont désormais définies avec les annotations, ce qui donne dans routing.yml :
    `bj_links:
        resource: "@BJLinksBundle/Controller/"
        type:     annotation`
    et dans les contrôleurs :
    `/**
      @Route("/", name="home")
     */
    public function indexAction(){}`
    
    Ainsi, dans les templates, pour appeler une route, il suffit de faire {{ path('_nom_de_la_route_') }}
- ! Ajout de fixtures, pour rentrer en bdd des données un utilisateur de test, à installer avec la commande `php bin/console doctrine:fixtures:load`

Bonnes pratiques :
- Toujours ajouter une ligne à la fin des fichiers
- Pour les formulaires : 
    - ils doivent être créés dans le dossier Form/Type, pas dans le contrôleur ;
    - les contraintes sont définies dans la construction du formulaire, pas sur l'entité ;
    - le bouton submit, lui, est ajouté dans la vue.
- Pour les contrôleurs :
    - Pas plus de 10 actions ;
    - Une action de doit pas dépasser 20 lignes.
- Vérifier la qualité du code avec https://insight.sensiolabs.com/
- Fichier .gitignore : certains fichiers/dossiers ne doivent apparaître dans le dépôt Git par exemple, les dossiers
vendor (puisque le fichier composer.json permettra de les réinstaller), var, et le fichier parameters.yml (qui contient
des infos sensibles)

! TODO
- config.yml : donner un nom personnalisé à la session
- parameters.yml.dist : changer le "secret"
- LinkType.php : ajouter les autres champs nécessaires à la création d'un lien
- LinksController.php : définir la sécurité pour l'accès à la page correspondant à ViewAction