#### Livrables :

[Lien du Kanban](https://trello.com/invite/b/KsNKHmAc/ATTIb0238e5a31d4e0599f58c310db63b348FE01D0A7/hackatonb3)

[Lien du GitHub](https://github.com/Xelame/HackatonB3)

# YSalles

Projet réalisé dans le cadre d'un Hackaton de 72h à Ynov Nantes pour les B3 Informatique.
Le thème imposé est "Améliorer la vie du campus".
Nous avons donc pris la décision de créer un outil web qui permettrait une meilleure gestion des plannings des salles.
Pour cela notre web app devait donc réaliser les actions suivante :

-Mettre en place un page récapitulative des salles ainsi que de leurs états (ouverte, fermé ou besoin d'une clé).

-Avoir une interface administrateur qui permet de voir et de gérer la dispo des salles manuellement.

-Avoir un système de planning de salles qui permettrait de changer automatiquement l'état des salles en fonctions des plannings celles-ci ( par exemple la salle 304 à un cours prévu de 14h à 16h le logiciel doit actualiser l'état de la tablette).

-Avoir un affichage tablette qui affiche une couleur sur l'écran selon son état et lors d'un toggle clic sur celui-ci, le planning de la salle apparait.

Nous avons décidé de travailler avec le framework Symfony dans sa version 6. Ce framework assez facile à prendre en main était un choix cohérent quand à la demande du projet.
Nous avons donc utilisé les langages suivants : Php, html, css, twig, js et mySql.

Procédure d'installation :

Ouvrir un cmd

Clonez le répertoire git clone https://github.com/Xelame/HackatonB3.git

Placez vous dans le projet cd /HacktonB3

La base de données est disponible sous le nom de |A REMPLIR| dans le repertoire principal.

Modifiez le .env avec vos informations avant de démarrer le site.

Importez la bdd sur phpmyadmin.

Ouvrez un cmd.

Exécutez ensuite composer install

Exécutez ensuite symfony serve
