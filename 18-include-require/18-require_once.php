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
    //appel du footer
    require_once "18-footer-1.php";     
    
    require_once "18-footer-1.php2";   //je fais volontairement une faute. 
    
    require_once "18-footer-1.php";   //malgré l'erreur, le code ne s'arrête pas. On ne recharge PAS le footer car c'est le même qu'avant. Cela aurait été un autre footer, il l'aurait chargé<div class=""></div>

    echo "je suis quand même exécuté";
    ?>
<!--<p>require et require_once sont assez dangereux car les erreurs sont visibles par les users et du cou p ils peuvent voir les noms des variables qui créent des failles de sécurité.</p>-->

</body>
</html>