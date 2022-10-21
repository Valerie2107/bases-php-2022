<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
    <h1>Include</h1>
    <p>La fonction include () va permettre d'importer n'importe quoi - en général un autre fichier PHP - aussi souvent qu'on le souhaite et sans erreur grave en cas d'échec.</p>
    <p>On va l'utiliser énormément. 
    <a href="https://www.php.net/manual/fr/function.include.php">info</a></p>

    <?php
    include "18-footer-1.php";     //pas obligatoire de mettre les parenthèses car include est tellement usité qu'il est devenu un mot réservé pour fonction. Il va donc chercher le footer de l'autre fichier.
    
    include "18-footer-1.php2";   //je fais volontairement une faute. Malgré celle-ci, le code va fonctionner pour la fonction précédente et le code ne s'arrête pas après l'erreur - PHP va également charger la fonction suivante.
    
    include "18-footer-1.php"; 
    ?>

</body>
</html>