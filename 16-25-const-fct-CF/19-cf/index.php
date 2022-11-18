<?php

/*

CECI EST NOTRE CONTROLEUR FRONTAL

*/

/*
DEPENDANCES
*/

// Appel des dépendances - ici config.php contient des constantes "vitales", on ne peut afficher le site que si on arrive  à les charger (require) et on ne peut le charger qu'une fois (require_once) sinon on aura des erreurs de redéfinition de constantes.
require_once "config.php";

/*
ROUTER
*/

// si il existe une variable get nommée page (on a cliqué sur un lien)
if(isset($_GET['page'])){
    
    // utilisation du switch
    switch($_GET['page']){
        case 'contact':
            include "mycontact.php";
            break;
        case 'curriculum':
            include 'cv.php';
            break;
        case 'img':
            include 'gallery.php';
            break;
        default:
            include_once "homepage.php";
    }

// sinonpas de $_GET['page'];    
}else{
    // inclusion d'homepage une seule X
    include_once "homepage.php";
}
