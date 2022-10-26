<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>require</title>
</head>
<body>
    <h1>require</h1>
    <p>fonction qui va permettre d'importer n'importe quoi (en général un autre fichier PHP) autant de fois qu'on le souhaite.<br>
    Il y a erreur grave et arrêt du script en cas d'échec.</p>

    <?php
    //appel du footer
    require "18-footer-1.php"; 
    require "18-config.php";
    echo $lulu; // coucou

    $lulu = 25;
    echo "<br>$lulu";
    require "18-config.php";
    echo "<br>$lulu";
    // erreur
    require "18-footer-2.php";  //vaec l'erreur, le code s'arrête. On ne recharge PAS le footer car c'est le même qu'avant. Cela aurait été un autre footer, il l'aurait chargé

     //require_once "18-footer-1.php"; 
     echo "<h3>Je suis pas exécuté</h3>";
     ?>
<!--<p>require et require sont assez dangereux car les erreurs sont visibles par les users et du cou p ils peuvent voir les noms des variables qui créent des failles de sécurité.</p>-->
<p>
include pour du design<br>
require pour des variables dangereuses et donc généralement dans un fichier de config
</p>
<!--- différence entre include et require: si j'ai une erreur avec include, il affichera quand même le reste de la page. require si j'ai une erreur, il affichera juste une erreur car il considere que 'est une erreur grave'
 - include quand je veux mettre de morceaux de codes dans un fichier surtout s'ils peuvent être chargés/affichés plusieurs fois sur la page (genre un menu)<br>

        - require once quand c'est un fichier important qu'on ne peut pas toucher surtout s'il y a des constantes.<br>-->

</body>
</html>