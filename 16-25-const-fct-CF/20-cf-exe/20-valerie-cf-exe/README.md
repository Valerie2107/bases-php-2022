# Exercice Contrôleur Frontal

## Exercice 20

### Instructions

Vous devez arriver à :

https://webdev-cf2m.be/20-cf-exe/

En partant du contrôleur frontal (index.php)

Sur votre branche main, faites un pull upstream main, puis

- Créez une branche exe20{prenom}, c'est celle-ci que vous enverrez sur votre origin
- Enregistrez ce dossier complet sous le nom 20-{votre prénom}-cf-exe
- Travaillez sur votre dossier et votre branche !
- Importez dans `index.php` le fichier indispensable une seule fois `configuration.php`
- Vérifiez l'existance de la variable de type GET `u`, si elle n'existe pas (sinon) chargez `pages/homepage.php`
- Si la variable de type GET `u` existe, faites un switch pour savoir quelle page vous devrez inclure (la valeur par défaut, donc si `u` n'est pas une valeur correspondante à une page, elle appellera `pages/homepage.php`)
- Vous devez inclure depuis index.php les pages du dossier `pages` grâce à ce switch
- ! Il fait toujours passer par index.php pour afficher une page, le lien vers le css est lié à l'emplacement du contrôleur frontal !
- Sur la page Formateurs WEB, vous verrez tous les formateurs, faîtes de même pour les autres pages! Tous les stagiaires sur stagiaires et toutes les classes sur classe.
- Ne m'envoyez pas votre exercice en pull request sur mon github avant que je vous le dise!

### Bon travail
