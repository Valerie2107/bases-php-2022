<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php

include "configuration.php";

/*
ROUTER
*/

// si il existe une variable get nommée page (on a cliqué sur un lien)
if(isset($_GET['u'])){
    
    // utilisation du switch
    switch($_GET['u']){
        case 'formateurs':
            include "pages/formaweb.php";
            break;
        case 'stagiaires':
            include 'pages/stagweb.php';
            break;
        case 'classes':
            include 'pages/classcf.php';
            break;
        default:
            include_once "pages/homepage.php";
    }

// sinonpas de $_GET['page'];    
}else{
    // inclusion d'homepage une seule X
    include_once "pages/homepage.php";
}
?>
<?php 
        include "footer.php" 
        ?>
