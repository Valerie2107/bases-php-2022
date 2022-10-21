<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>require_once</title>
</head>
<body>
    <h1>require_once</h1>
    <p>fonction qui va permettre d'importer n'importe quoi (en général un autre fichier PHP) 1 seule fois. L'intérêt est d'éviter des chargements multiples non-nécessaires.<br>
    Il y a erreur grave et arrêt du script en cas d'échec.</p>

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
    // malgré l'erreur, le code ne s'arrête pas, on ne recharge PAS le footer
    //require_once "18-footer-1.php"; 
    echo "<h3>Je suis pas exécuté</h3>";
    ?>
<!--<p>require et require_once sont assez dangereux car les erreurs sont visibles par les users et du cou p ils peuvent voir les noms des variables qui créent des failles de sécurité.</p>-->

</body>
</html>