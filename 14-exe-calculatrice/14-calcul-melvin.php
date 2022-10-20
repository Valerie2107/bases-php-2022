<?php
if (isset($_POST['nb-1'], $_POST['op'], $_POST['nb-2'],)) {
    // exemple si on a envoyé le formulaire
    $result = "formulaire envoyé";
    // vérification des champs (!! on ne peut pas diviser par 0)

    if (isset($_POST['nb-1'], $_POST['op'], $_POST['nb-2']) && is_numeric($_POST['nb-1']) && is_numeric($_POST['nb-2'])) {
        $op_1 = (float) $_POST['nb-1'];
        $op_2 = (float)$_POST['nb-2'];
        if ($_POST['op'] === 'divi' && $op_2 == 0) {
            $result = "impossible de diviser par zéro!";
        } elseif ($_POST['op'] === 'divi' && $op_2 == 0) {
            $result = "impossible de diviser par zéro!";
        } elseif ($_POST['op'] === 'add') {
            $result = $op_1 + $op_2;
        } elseif ($_POST['op'] === 'sous') {
            $result = $op_1 - $op_2;
        } elseif ($_POST['op'] === 'multi') {
            $result = $op_1 * $op_2;
        } elseif ($_POST['op'] === 'divi') {
            $result = $op_1 / $op_2;
        }
    } else {
        $result = "On a besoin de 2 valeurs numériques pour pouvoir les calculer";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>

<body>
    <h1>Calculatrice</h1>
    <h2>Exercice calculatrice</h2>
    <p>Créez une branche et un nouveau fichier dans 14-exe/14-calcul-{prénom}.php<br>
        Envoyez-moi le git pull request sur notre dépôt de la classe</p>
    <p>$result doit contenir la réponse au calcul, ou l'erreur de calcul ou de fonctionnement</p>
    <form action="" name="calcul" method="POST">
        <input type="text" name="nb-1" />
        <select name="op">
            <option value="add">+</option>
            <option value="sous">-</option>
            <option value="multi">*</option>
            <option value="divi">/</option>
        </select>
        <input type="text" name="nb-2" />
        <input type="submit" value="Calculer" />
    </form>
    <?php

    ?>
    <?php
    if (isset($result)) :
        echo $result;
    endif;
    ?>
    <hr>
    <?php
    var_dump($_POST);
    ?>
</body>

</html>