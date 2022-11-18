<?php

if(isset($_GET['pg'])){
    
   
    switch($_GET['pg']){
        case ' ':
            include "pg/pageHome.php";
            break;
        case 'his':
            include 'pg/histoire.php';
            break;
        case 'img':
            include 'pg/galerie.php';
            break;
        case'conf':
             include 'pg/conflicts.php'; 
            break;
        case 'cau':
             include 'pg/cause.php'; 
             break ;  
        case 'droit': 
             include 'pg/droit.php'; 
             break; 
       case 'link':        
                include  'pg/liens.php'; 
                break;
       
        default:
            include_once "pg/pageHome.php";
            break; 
    }

  
}else{
    
    include_once "pg/pageHome.php";
    
}




?>