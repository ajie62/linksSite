Voici les ajouts/modifications apportés :
- UserBundle : 
    - se charge de l'authentification des utilisateurs ;
    - ! inscription d'un nouvel utilisateur
- LinksBundle : 
    - ajout d'un fichier .gitignore
    - suppression du dossier DependencyInjection, qui ne nous sera pas utile ici ;
    - dans l'entité Link : ajout de __construct, pour définir la date automatiquement à la création d'un nouveau lien ;
    - ajout de la route "add", du formulaire LinkType, et de la vue "add".
- ! composer.json : ajout de la description

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