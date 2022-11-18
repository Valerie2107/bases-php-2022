<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require_once</title>
</head>
<body>
    <h1>require_once</h1>
    <p>require_once() est une fonction qui va permettre d'importer n'importe quoi (en général un autre fichier PHP), 1 seule fois, l'intéret étant d'éviter des chargements multiples non-nécessaires !! Erreur grave et arr^^et du script en cas d'échec</p>
    <?php
    // appel le footer
    require_once "18-footer-1.php"; 
    require_once "18-config.php";
    echo $lulu; // coucou

    $lulu = 25;
    echo "<br>$lulu";
    require_once "18-config.php";
    echo "<br>$lulu";
    // erreur
    require_once "18-footer-2.php"; 
    // avec l'erreur on ne recharge PAS le footer
    //require_once "18-footer-1.php"; 
    echo "<h3>Je suis pas exécuté</h3>";
    ?>
</body>
</html>