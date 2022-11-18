<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tom</title>
</head>
<body>
    
</body>
</html>

<?php

require_once "configuration.php";
include "pages/menu.php";

// si il existe une variable get nommée page (on a cliqué sur un lien)
if(isset($_GET['u'])){
    
    // utilisation du switch
    switch($_GET['u']){
        case 'classes':
            include 'pages/classcf.php';
            break;
        case 'formateurs':
            include 'pages/formaweb.php';
            break;
        case 'stagiaires':
            include 'pages/stagweb.php';
            break;
        default:
            include_once "pages/homepage.php";
    }

// sinonpas de $_GET['page'];    
}else{
    // inclusion d'homepage une seule X
    include_once 'pages/homepage.php';
}
include "pages/footer.php"

?>
