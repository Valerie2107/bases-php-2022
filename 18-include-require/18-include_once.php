<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include_once</title>
</head>
<body>
    <h1>include_once</h1>
    <p>fonction qui va permettre d'importer n'importe quoi (en général un autre fichier PHP) </p>

    <?php
    include_once "18-footer-1.php";     //même code que pour le include.
    
    include_once "18-footer-1.php2";   //je fais volontairement une faute. 
    
    include_once "18-footer-1.php";   //malgré l'erreur, le code ne s'arrête pas. On ne recharge PAS le footer car c'est le même qu'avant. Cela aurait été un autre footer, il l'aurait chargé<div class=""></div>

    echo "je suis quand même exécuté";
    ?>
<p>include et include_once sont assez dangereux car les erreurs sont visibles par les users et du cou p ils peuvent voir les noms des variables --> faille de sécurité.</p>

</body>
</html>