<?php
if(isset($_GET['pg'])) {

    switch($_GET['pg']) {
        case 'capital':
            include "pages/capital.php";
            break;
        case 'lieuxfort':
            include "pages/lieuxfort.php";
            break;
        case 'lesdrogues':
            include "pages/lesdrogues.php";
            break;
        case 'histoire':
            include "pages/histoire.php";
            break;
        case 'geo':
            include "pages/geo.php";
            break;
        case 'galerie':
            include "pages/galerie.php";
            break;
        default:
        include_once "pages/homepage.php";
    }

}else{
    include_once "pages/homepage.php";
}