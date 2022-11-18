<?php

require_once "configuration.php";

if(isset($_GET['u'])){
    
    // utilisation du switch
    switch($_GET['u']){
        case 'stagiaires':
            include "./pages/stagweb.php";
            break;
        case 'formateurs':
            include './pages/formaweb.php';
            break;
        case 'classes':
            include './pages/classcf.php';
            break;
        default:
            include_once "./pages/homepage.php";
    }
}else{
    include_once "./pages/homepage.php";
}
include "./pages/footer.php";
