<?php 

if(isset($_GET['p'])){

    switch($_GET['p']){
        case "cuisine":
            include "pages/cuisine.php";
            break;
        case "ville":    
            include "pages/ville.php";
            break;
        case "manga":
            include "pages/manga.php";
            break;
        case "culture":
            include "pages/culture.php";
            break;
        case "paysage":
            include "pages/paysage.php";
            break;
        case "histoire":
            include "pages/histoire.php";
        default:
            include "pages/404.php";         




    }





} else {
    include_once "pages/homepage.php";

}