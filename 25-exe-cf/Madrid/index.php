<?php

if(isset($_GET['p'])){
    
    switch($_GET['p']){
        case 'geo':
            include 'pages/geographie.php';
            break;
        case 'hist':
            include 'pages/histoire.php';
            break;
        case 'cult':
            include "pages/culture.php";
                break;
        case 'gal':
            include 'pages/galerie.php';
                break;
        case 'form':
            include 'pages/contact.php';
                break;
        case 'link':
            include 'pages/liens.php';
                break;
        default:
            include_once 'homepage.php';
    }
  
}else{
    include_once "homepage.php";
}
