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