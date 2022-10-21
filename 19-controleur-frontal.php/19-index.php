<?php

//appel des dépendances
require_once "config.php";

// si il existe une variable get nommée page (on a cliqué sur un lien)
if(isset($_POST['page'])){

// sinon
}else{
    //inclusion d'homepage une seule fois
    include_once "homepage.php";
}

?>