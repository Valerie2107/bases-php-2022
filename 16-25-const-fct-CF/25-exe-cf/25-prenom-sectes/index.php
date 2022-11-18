<?php

$title = "Accueil";

if (isset($_GET['u'])) {

    switch ($_GET['u']) {
        case 'hist': 
            $title = "Histoire"; 
            include 'pages/Histoire.php';
            break;
        case 'dif':
            $title = "Secte et Religion";
            include "pages/secte-religion.php";
            break;
        case 'Krish':
            $title = "Krishna";
            include 'pages/krishma.php';
            break;
        case 'Morm':
            $title = "Mormons";
            include 'pages/mormons.php';
            break;
        case 'scien':
            $title = "Scientologue";
            include 'pages/scientologue.php';
            break;
        case 'Tsoleil':
            $title = "temple du soleil";
            include 'pages/Lordre_du_temple_du_soleil.php';
            break;
         case 'form':
            $title = "Contact";
            include 'pages/contact.php';
            break;
        default:
            $title = "error 404";
            include_once 'pages/error-404.php';
    }
} else {
    $title = "Accueil";
    include_once 'pages/home-page.php';
};