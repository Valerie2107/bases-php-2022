<?php
// affichage de la variable GET 
//var_dump($_GET);

// si il existe une variable get nommée p
if(isset($_GET['p'])){
    // on va vérifier la valeur de p avec un switch
    switch($_GET['p']){
        case "contact":
            include "pages/contact.php";
            break;
        case "gal":
            include "pages/galerie.php";
            break;
        default:
            include "pages/404.php";
    }

// sinon    
}else{
    include "pages/homepage.php";
}