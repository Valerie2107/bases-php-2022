<?php


if(isset($_GET['pg'])){
  
      switch($_GET['pg']){
         case '':
        include_once 'pg/acceuil.php';
          break; 
        case 'geo':
            include_once 'pg/geographie.php';
            break;
        case 'hist':
            include_once 'pg/histoire.php';
            break;
        case 'cult':
            include_once 'pg/culture.php';
            break;
        case 'gal':
            include_once 'pg/galerie.php';
            break;
         case 'spor':
                include_once 'pg/sport.php';
                break;
        case 'form':
            include_once 'pg/contact.php';
            break;
          
        default:
            include_once 'pg/acceuil.php';
    }

}else {
    include_once 'pg/acceuil.php';
}

?>