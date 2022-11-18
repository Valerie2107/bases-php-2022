<?php
if (isset($_GET['pg'])) {
    switch ($_GET['pg']) {
        case 'home':
            include "pages/home.php";
            break;
        case 'anx':
            include "pages/anxiete.php";
            break;
        case 'auti':
            include 'pages/autisme.php';
            break;
        case 'bipo':
            include 'pages/bipolaire.php';
            break;
        case 'demen':
                include 'pages/demence.php';
                break;
        case 'depre':
                include 'pages/depression.php';
                break;
        case 'schizo':
                include 'pages/schizophrenie.php';
                 break;
        case 'tbo':
                include 'pages/tb-compul.php';
                break;
        case 'tdah':
                include 'pages/tdah.php';
                 break;
        default:
            include_once "pages/home.php";
    }
} else {
    include_once "pages/home.php";
};


  

    ?>
    