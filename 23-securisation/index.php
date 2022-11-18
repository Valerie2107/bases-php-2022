<?php

/*

Front controller -> index.php

*/

/*

Appel des dépendances

*/
require_once "config.php";


// (modèle)
include "functions.php";

/*

Routage (router), ou liens vers d'autres controleurs

*/
if(isset($_GET['page'])){   //--> attention qu'une variable GET peut être modifiée par un user, donc il FAUT passer par un "in_array" pour sécuriser !!! surtout que dans notre exemple on charge les données automatiquement de la page du user donc très dangereux si qq veut injecter un virus. Il ne faut faire ce genre de choses que si (ET VRAIMENT SEULEMENT SI) on a la preuve à 100% que le tout est méga sécurisé.   

    // si le nom de la variable get existe dans le tableau NOM_DE_PAGES
    if(in_array($_GET['page'],NOM_DE_PAGES)){       //--> in_array est un tableau indexé qui a été mis dans la CONST 
        include "pages/".$_GET['page'].".php";
    }else{                          //     php.net/manual/fr/function.in-array.php   -> important
        include "pages/404.php";
    }
}else{
    include "pages/homepage.php";
}

