<?php

if(isset($_GET['p'])){
    
    
    switch($_GET['p']){
        case 'form':
            include "pages/contact.php";
            break;
        case 'hist':
            include 'pages/histoire.php';
            break;
        case 'gal':
            include 'pages/gallery.php';
            break;
        case 'tourisme':
            include 'pages/tourisme.php';
            break;
        case 'cult':
            include 'pages/culture.php';
            break;
        case 'geo':
            include 'pages/geographie.php';
            break;
        default:
            include_once "pages/homepage.php";
    }

   
}else{
    
    include_once "pages/homepage.php";
}
