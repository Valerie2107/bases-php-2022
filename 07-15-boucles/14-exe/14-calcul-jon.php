<?php

if(isset($_POST['first'],$_POST['choix'],$_POST['second']) && is_numeric($_POST['first']) && is_numeric($_POST['second'])){

    $calcul1 = (float) $_POST['first'];
    $calcul2 = (float) $_POST['second'];

    
    if($_POST['choix']==='addition'){
        $reponse = $calcul1+$calcul2;            
    }elseif($_POST['choix']==='soustraction'){
        $reponse = $calcul1-$calcul2;          
    }elseif($_POST['choix']==='multiplication'){
        $reponse = $calcul1*$calcul2;          
    }elseif($_POST['choix']==='division'){
        if($calcul2 == 0){
            $reponse = "impossible de diviser par zéro!";
        }else{
            $reponse = $calcul1/$calcul2;
        }       
    }else{
        $reponse = "Ne touche pas à mon formulaire ".$_SERVER['REMOTE_ADDR'];
    }
}else{
    $reponse = "On a besoin de 2 valeurs numériques pour pouvoir les calculer";
}

?>
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
    if(isset($reponse)):
        echo $reponse;
    endif;
    ?>
    <hr>
    <?php
    var_dump($_POST);
    ?>
</body>
</html>