# exercice 29

Créez un formulaire permettant de recolter les mails et le nom des utilisateurs et de les mettre dans la table `adresses`.

Le CF est `public/index.php`
La vue est `view/indexView.php`

Il faut sur la même page afficher par date DESC toutes les adresses insérées.

Affichez "Pas encore d'adresses" si pas d'adresses.

Affichez une erreur si la mailadresses  existe déjà (champs unique !).

Affichez une erreur si le format de l'adresse mail n'est pas valide.

Affichez une erreur si un champs est vide.

La table doit être protégée contre les attaques !

Bonus 1: ne pas afficher les 5 premiers caractères des adresses mail (mais elles se trouvent dans la DB de manière complètes) :

        pitz michaël *****el.j.pitz@gmail.com

Bonus 2: ne pas afficher le nom mais sa première lettre en majuscule (même si il la met en minuscule) :

        P. michaël *****el.j.pitz@gmail.com

Bonus 3 : un peu de design ;-)

## Correction

#### CF = contrôleur frontal = public/index.php

1) Vérifier dans wamp ce que donne le dossier ´public´ (création d'un hôte virtuel -> ajouter un virtualhost en copiant le chemin vers le dossier ´public´).
2) Ici l'URL choisie est ´http://29-exe-insert-select/´ qui va vers ´public´
3) On va enregistrer ´config.php.ini´ en ´config.php´ (donc avec son contenu)
4) On va ensuite importer la DB qui se trouve dans ´datas´ dans MariaDB, en décochant les clefs étrangères (ici DB = exe29 et 1 table = adresses)
5) Connexion avec try catch en mysqli procédural - arrêt et affichage  de l'erreur en cas d'échec
6) Fermeture de connexion (! après les requêtes - fin du fichier CF)
7) Appel de la vue ´../view/indexView.php´
8) On voit depuis le CF l'html de la vue
9) On va récupérer tous les mails depuis le CF par ordre de date DESC
10) on va compter le nombre de mails récupérés dans le CF
11) Si on a pas de mails, on affiche "Pas encore d'adresses" dans indexView.php
12) Conversion des données SQL dans le CF en tableau indexé avec `mysqli_fetch_all($queryMail,MYSQLI_ASSOC)`
13) sinon (si on a récupéré au moins 1 adresses) dans indexView.php
14) Boucle foreach tant que l'on a des mails

