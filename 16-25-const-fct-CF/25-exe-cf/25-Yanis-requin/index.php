<?php

if(isset($_GET['p'])){

    switch($_GET['p']){
        case "sharks":
            include "sharks.php";
            break;
        case "etymology":
            include "etymology.php";
            break;
        case "anatomy":
            include "anatomy.php";
            break;
        case "jaw":
            include "jaw.php";
            break;          
        default:
            include "404.php";
    }
   
}else{
    include "homepage.php";
}