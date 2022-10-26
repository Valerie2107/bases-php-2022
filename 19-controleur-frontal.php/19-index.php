<?php
/*

CECI EST LE CONTROLEUR FRONTAL

*/
//- pourquoi on appele ça un controleur frontal? pourquoi on le crée? c'est un seul fichier par lequel tout passe. Du coup c'est une securité pour éviter qu'il n'affiche mon code source.<br>

//appel des dépendances  -  ici config.php contient des constantes "vitales", on ne peut afficher le site que si on arrive à les charger (require) et on ne ppeut le charger qu'une fois (require once) sinon on aura des erreurs de redéfinition de constantes (ce qui n'est pas possible)


require_once "config.php";


/*
on a créé un routeur ici. 
il n'est pas obligé d'être dans le même fichier que le controleur frontal, il peut être sur une autre page reliée
*/


// si il existe une variable get nommée page (on a cliqué sur un lien)
if(isset($_POST['page'])){

// sinon
}else{
    //inclusion d'homepage une seule fois
    include_once "homepage.php";
}




?>