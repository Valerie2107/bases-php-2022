<?php
include "menu.php";

include "configuration.php";


if(isset($_GET['u'])){
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
    }

   

}else{

   

    include_once "pages/homepage.php";

}
include "footer.php"; 