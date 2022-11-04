<?php
//import du fichier contenant nos fonctions
include "22-functions.php";

//débogage de ma fonction
var_dump($_POST);

//si on a envoyé le formulaire
if(isset($_POST['int1'], $_POST['int2'], $_POST['operation']))


$resultat ="utiliser notre calculette";





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de nos fonctions</title>
</head>
<body>
    <h1>Test de nos fonctions</h1>
    <h2>Calculatrice</h2>
    <p>Exercice - enregistrez ce fichier sous 22-appel-{prenom}.php mettez ici un formulaire à 2 entrées et un select avec + - * /</p>
    <p>Lorsqu'on clique sur envoyer, le formulaire est envoyé par POST, et le résultat s'affiche en dessous</p>
    <p>Bonus, changez la fonction pour afficher par exemple :<br> 25/5 = 5</p>

    <hr>
    <br>

<form action="" method="POST">
    <input type="text" name="int1" />
    <select name="op"> <!--"op" de opération-->
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="int2" />
    <input type="submit" value="="/>
</form>

<?php 
if(isset ($resultat)){
    echo $resultat;
}

?>

    
</body>
</html>