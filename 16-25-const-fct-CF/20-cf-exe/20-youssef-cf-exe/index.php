<?php

include "./pages/menu.php";
include "configuration.php";

if(isset($_GET['u'])){
    
    
    switch($_GET['u']){
        case 'classes':
            include "./pages/classcf.php";
            break;
        case 'formateurs':
            include './pages/formaweb.php';
            break;
        case 'stagiaires':
            include './pages/stagweb.php';
            break;
        default:
            include "./pages/homepage.php";
    } 
}else{
        include "./pages/homepage.php";
    }
    include "futer.php";
    
    ?>