<!DOCTYPE html>
<html lang="en">
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
    <p>$reponse doit contenir la réponse au calcul, ou l'erreur de calcul ou de fonctionnement</p>
    <form action="" name="calcul" method="POST">
        <input type="text" name="first" />
        <select name="choix">
            <option value="addition">+</option>
            <option value="soustraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
        <input type="text" name="second" />
        <input type="submit" value="Calculer"/>
    </form>
    <?php

    if(isset($_POST['first'],$_POST['choix'],$_POST['second'],)){
    // exemple si on a envoyé le formulaire
    $reponse ="formulaire envoyé";

    // vérification des champs (!! on ne peut pas diviser par 0)

        if(is_numeric($_POST['first'])AND is_numeric($_POST['second']))

            $premier= (float) $_POST['first'];
            $deuxieme= (float) $_POST['second'];
            $choix= $_POST['choix'];

            if ($choix == "+") {
                 $result=($premier+$deuxieme);
                 echo $result;
            } elseif ($choix == "-") {
                 $result=($premier-$deuxieme);
                 echo $result;
            } elseif ($choix == "*") {
                 $result=($premier*$deuxieme);
                 echo $result;
            } elseif ($second == 0) {
                 echo "Vous ne pouvez pas diviser par 0";
            } elseif ($choix == "/"){
                 $result=($premier/$deuxieme);
                 echo $result;
            }

        if (isset($choix)){
        echo("Resultat du calcul ".$premier.$choix.$deuxieme." = ".$result);
    }
}
    
    ?>
    <hr>
    <?php
    var_dump($_POST);
    if (isset($result)){
        echo "$result";
    }
    ?>
</body>
</html>