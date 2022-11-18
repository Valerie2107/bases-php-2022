<?php

if(isset($_GET['pg'])){
    switch($_GET['pg']){
        case 'accueil':
            include 'pg/home.php';
            break;
        case 'bagarre':
            include 'pg/bagarre.php';
            break;
        case 'violence':
            include 'pg/violence.php';
            break;
        case 'musique';
            include 'pg/musique.php';
            break;
        case 'irlande';
            include 'pg/irlande.php';
            break;
        case 'alcool':
            include 'pg/alcool.php';
            break;
        case 'cailloux':
            include 'pg/cailloux.php';
            break;
        case 'contact':
            include 'pg/contact.php';
            break;
        default :
            include 'pg/404.php';
    }
}else{
    include 'pg/home.php';
}