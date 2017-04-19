Voici les ajouts/modifications apportés :
- UserBundle : 
    - se charge de l'authentification des utilisateurs ;
    - inscription d'un nouvel utilisateur
    - fix erreur unserialize
    - modification pour prendre en compte la relation avec Links
- LinksBundle : 
    - ajout d'un fichier .gitignore
    - suppression du dossier DependencyInjection, qui ne nous sera pas utile ici ;
    - dans l'entité Link : ajout de __construct, pour définir la date automatiquement à la création d'un nouveau lien ;
    - ajout de la route "add", du formulaire LinkType, et de la vue "add".
    - modification de l'entité pour mettre en place une relation bidirectionnelle avec User (pense à mettre à jour ta bdd) ;
    - modification de LinksController avec une simple méthode de récupération - la vue index.html.twig a été adaptée en conséquence ;
    - modification de addAction, pour prendre en compte l'auteur
    - prise en compte du statut authentifié/anonyme pour l'affichage de certains liens, mise en place d'un début de sécurité sur l'action "addLink"
- composer.json : ajout de la description
- dossier LinksBundle/Resources supprimé : ce bundle n'a pas vocation à être réutilisé. Donc, son routing et ses vues 
sont directement définis dans app/config/routing.yml et dans app/Resources/views
- appel des vues dans les contrôleurs : comme les vues ont été déplacées, pour les appeler, il faut faire _nom_du_dossier_/_nom_du_fichier_
(ex. : `links/index.html.twig`)
- routing : les routes sont désormais définies avec les annotations, ce qui donne dans routing.yml :
    `bj_links:
        resource: "@BJLinksBundle/Controller/"
        type:     annotation`
    et dans les contrôleurs :
    `/**
      @Route("/", name="home")
     */
    public function indexAction(){}`
    
    Ainsi, dans les templates, pour appeler une route, il suffit de faire {{ path('_nom_de_la_route_') }}
- Ajout de fixtures, pour rentrer en bdd des données un utilisateur de test, à installer avec la commande `php bin/console doctrine:fixtures:load`
- ! Tags : Ajout de l'entité tag et du trait taggable. 
    L'utilisation du trait va permettre d'éviter la duplication de code au cas où on voudrait implémenter un système de tags sur autre chose que les liens (des articles, par exemple).
    Un DataTransformer a été créé pour pouvoir rendre le champ tags plus "sympa" : en effet, c'est désormais un champ texte, il fallait donc passer d'une collection à un tableau, puis d'un tableau à une chaîne de caractères.
- ! Tests : ajout de quelques tests unitaires concernant notre DataTransformer et un test fonctionnel vérifiant les routes de l'application.
- ! AppBundle : HelpFormExtension
    Cette extension s'applique à tous les types de champs de formulaire et permet d'ajouter simplement un message d'aide, par exemple :
    `$builder->add('name', TextType::class, array(
        'title' => 'Mon titre',
        'help' => 'Mon message d'aide...'
    ));`
    Pourquoi dans AppBundle ? Cette classe HelpFormExtension va pouvoir être utilisée sur tous nos formulaires, ce serait donc un non-sens de la placer dans un bundle spécifique.
    AppBundle sera donc un bundle spécifique à notre application, mais générique, dans le sens où il ne concernera une fonctionnalité particulière.
    Dans app\config\services.yml, on définit notre service : bj.form.extension.help, avec la classe utilisée et on précise, dans les tags, le nom et le type étendu (ici FormType, puisqu'on veut que cela s'applique à tous les types de champs).
    Dans app\Resources\views, on a un nouveau dossier : form, avec le fichier fields.html.twig qui nous permet de surcharger la construction par défaut de twig du bloc form_row pour y intégrer notre "help"
    
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
- LinksController.php : définir la sécurité pour l'accès à la page correspondant à ViewAction
