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
    
    require "18-footer-1.php2";   //je fais volontairement une faute. 
    
    require "18-footer-1.php";   //malgré l'erreur, le code ne s'arrête pas. On ne recharge PAS le footer car c'est le même qu'avant. Cela aurait été un autre footer, il l'aurait chargé<div class=""></div>

    echo "je suis quand même exécuté";
    ?>
<!--<p>require et require sont assez dangereux car les erreurs sont visibles par les users et du cou p ils peuvent voir les noms des variables qui créent des failles de sécurité.</p>-->
<p>
include pour du design<br>
require pour des variables dangereuses et donc généralement dans un fichier de config
</p>


</body>
</html>