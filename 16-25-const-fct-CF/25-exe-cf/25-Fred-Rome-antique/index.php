<?php

if(isset($_GET['p'])){
    
    switch($_GET['p']){
        case 'Roy':
            include 'pages/Royale.php';
            break;
        case 'Rep':
            include 'pages/Republique.php';
            break;
        case 'Emp':
            include "pages/Empire.php";
                break;
        default:
            include_once 'pages/Homepage.php';
    }
  
}else{
    include_once "pages/Homepage.php";
}
