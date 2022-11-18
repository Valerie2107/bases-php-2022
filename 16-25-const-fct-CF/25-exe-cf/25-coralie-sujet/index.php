<?php
if(isset($_GET['l'])){
    switch($_GET['l']){
        case'airb': include './pg/airbusA350.php';
        break;

        case'atr': include './pg/atr-42.php';
        break;

        case'bell': include './pg/bellx2.php';
        break;

        case'bomb': include './pg/bombardier.php';
        break;

        case'emb' : include './pg/embraer190.php';
        break;
        case'lock' : include './pg/lockheadSR-71.php ';
        break;
        case'xb' : include './pg/xb-70Valkyrie.php ';
        break;
        case'suk' : include './pg/sukhoiSu27.php ';
        break;

        
        
        
    default: 
          include_once './pg/homepage.php';
    }
}else{
    include_once './pg/homepage.php';
}

