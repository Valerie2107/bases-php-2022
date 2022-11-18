<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require</title>
</head>
<body>
    <h1>require</h1>
    <p>require() est une fonction qui va permettre d'importer n'importe quoi (en général un autre fichier PHP), autant de x qu'on le souhaite,  !! Erreur grave et arrêt du script en cas d'échec</p>
    <?php
    // appel le footer
    require "18-footer-1.php"; 
    require "18-config.php";
    echo $lulu; // coucou

    $lulu = 25;
    echo "<br>$lulu";
    require "18-config.php";
    echo "<br>$lulu";
    // erreur
    require "18-footer-2.php"; 
    // avec l'erreur, le code s'arrête, on ne recharge PAS le footer
    //require "18-footer-1.php"; 
    echo "<h3>Je suis pas exécuté</h3>";
    ?>
</body>
</html>