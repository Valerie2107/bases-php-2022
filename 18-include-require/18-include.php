<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
    <h1>include</h1>
    <p>include() est une fonction qui va permettre d'importer n'importe quoi (en général un autre fichier PHP), autant de fois qu'on le souhaite, et sans erreur grave en cas d'échec</p>

    <!--   https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/inclure-fichier-include-require/  -->

    <p>La seule et unique différence entre les instructions include et require va se situer dans la réponse du PHP dans le cas ou le fichier ne peut pas être inclus pour une quelconque raison (fichier introuvable, indisponible, etc.).<br>

Dans ce cas-là, si l’inclusion a été tentée avec include, le PHP renverra un simple avertissement et le reste du script s’exécutera quand même tandis que si la même chose se produit avec require, une erreur fatale sera retournée par PHP et l’exécution du script s’arrêtera immédiatement.</p>


    <?php
    include "18-config.php";
    // appel le footer
    include "18-footer-1.php"; 
    // erreur
    include "18-footer-1.php2"; 
    // malgré l'erreur, le code ne s'arrête pas, on charge donc encore le footer
    include "18-footer-1.php"; 
    ?>
</body>
</html>