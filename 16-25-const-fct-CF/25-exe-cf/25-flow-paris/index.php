<?php

if(isset($_GET['pg'])){
    switch($_GET['pg']){
        case 'sacrecoeur':
            include "pages/sacre-coeur.php";
            break;
        case 'tour':
                include "pages/tour-eiffel.php";
                break;
        case 'musee':
                include "pages/musee-du-louvre.php";
                    break;       
        case 'lesinvalides':
                include "pages/les-invalides.php";
                    break;
        case 'opera':
                include "pages/opera-garnier.php";
                    break;
        case 'arc':
            include "pages/arc-de-triomphe.php";
                break;
        case 'notredame':
            include 'pages/notre-dame-de-paris.php';
                break;
        default:
            include_once "pages/ici-c-paris.php";
    }
}else{
    include_once "pages/ici-c-paris.php";
}