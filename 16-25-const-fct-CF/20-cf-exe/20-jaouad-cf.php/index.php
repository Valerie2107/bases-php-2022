<?php
include "pages/menu.php";
include "configuration.php";  //le fichier indispensable une seule fois configuration.php

// Vérifiez l'existance de la variable de type GET u
if(isset($_GET['u'])){
    
    //   switch
    switch($_GET['u']){
        case 'formateurs':
            include "pages/formaweb.php";
            break;
        case 'stagiaires':
            include 'pages/stagweb.php';
            break;
        case 'classes':
            include 'pages/classcf.php';
            break;
        default:
            include_once "./page/homepage.php";
    }
    
}else{
    
    include_once "pages/homepage.php";
}
include 'pages/footer.php'; //CF2m © 2022 


