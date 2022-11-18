<?php
if (isset($_GET['pg'])){
    switch ($_GET['pg']){
        case 'pg0':
            include "page/gererespace.php";
            break;
        case 'pg1':
            include "page/techniques.php";
            break;
        case 'pg2':
            include "page/fairesoimeme.php";
            break;
        case 'pg3':
            include "page/gadgets.php";
            break;
        case 'pg4':
            include "page/goutez.php";
            break;
        case 'pg5':
            include "page/conclusion.php";
            break;
        case 'home':
            include "page/homepage.php";
            break;
        default: include_once "page/404.php";
            
            
            
    }
}

else {
    include "page/homepage.php";
}