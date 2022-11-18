<?php
if(isset($_POST['first'],$_POST['choix'],$_POST['second'],)){
    // exemple si on a envoyé le formulaire
    $reponse ="formulaire envoyé";

    // vérification des champs (!! on ne peut pas diviser par 0)
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
    <h3>Insérez des nombres dans les champs pour effectuer un calcul :</h3>
<form name="calcul" method="POST">
        <input type="text" name="first" />
        <select name="choix">
            <option value="addition">+</option>
            <option value="soustraction">-</option>
            <option value="division">/</option>
            <option value="multiplication">*</option>
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
<?php
    $champ1 =($_POST['first']);
    $choix = ($_POST['choix']);
    $champ2 = ($_POST['second']);
    {
        if($choix == 'division' AND $champ2 == 0)
        {
            echo 'Pas de division par 0 !';
        }
        else
        { 
            if($choix == 'addition'){

            $reponse = $champ1  + $champ2;

            echo "La somme des deux nombres est {$reponse}";

            }

            if($choix == 'soustraction') {

            $reponse = $champ1  - $champ2; 

            echo "La différence des deux nombres est {$reponse}"; 

            }

            if($choix == 'multiplication'){ 

            $reponse = $champ1  * $champ2;

            echo "La multiplication des deux nombres est {$reponse}";

            }

            if($choix == 'division'){

            $reponse = $champ1  / $champ2;

            echo "Le résultat est {$reponse}";
            }
        }
        }



?>
</body>
</html>