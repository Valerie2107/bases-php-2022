<?php
// import du fichier contenant nos fonctions
include "22-functions.php";

// débogage de la globale POST
// var_dump($_POST);

// si on a envoyé le formulaire (on a des données à traiter)
if(isset($_POST['int1'],$_POST['int2'],$_POST['operation'])){
    // débogage allégé
    // print_r($_POST);

    // traitement des données en variables locales (on ne sait pas si les fonctions sont sécurisées)
    $n1 = (float) $_POST['int1']; // conversion en float
    $n2 = (float) $_POST['int2'];
    $operation = htmlentities($_POST['operation'],ENT_QUOTES); // transformation des caractères dangereux en entités html, le ENT_QUOTES permet d'encoder aussi les ' et " 


    // traitement des données avec les fonctions
    $resultat = calculBasic($n1,$n2,$operation);

    $resultat2 = calculBasicWithInstruction($n1,$n2,$operation);
}

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
    <form action="" method="post">
        <input type="text" name="int1"/>
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="int2"/>
        <input type="submit" value="=" />
    </form>
    <h3>Résultat de calculBasic()</h3>
    <p>
    <?php

    if(isset($resultat)){
        echo $resultat;
        
    } else{
        echo "Envoyez le formulaire pour tester";
    }
    ?>
    </p>
    <h3>Résultat de calculBasicWithInstruction()</h3>
    <p>
    <?php
    if(isset($resultat2)){
        echo $resultat2;
    } else{
        echo "Envoyez le formulaire pour tester";
    }
    ?>
    </p>
</body>
</html>