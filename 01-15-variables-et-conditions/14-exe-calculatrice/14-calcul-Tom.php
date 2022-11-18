<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
<form action="" name="calcul" method="POST">
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

    <hr>
    <?php
    var_dump($_POST);
    ?>
<?php
// existance de toutes les variables
if(isset($_POST['first'],$_POST['choix'],$_POST['second'],)){
   // les 2 variables ne contiennent que du numérique
    if(is_numeric($_POST['first']) AND is_numeric($_POST['second']))
    {
  
    $nombre1 =$_POST['first'];
    $choix = $_POST['choix'];
    $nombre2 = $_POST['second'];
    
        if($choix == 'division' AND $nombre2 == "0")
        {
            echo 'On peut pas diviser par 0 !';
        }
        else
        { 
            if($choix == 'addition')
            {
            $reponse = $nombre1 + $nombre2;
            echo 'La somme de ces nombres est '.$reponse;
            }
            
            if($choix == 'soustraction') 
            {
            $reponse = $nombre1 - $nombre2; 
            echo 'La différence de ces nombres est '.$reponse; 
            }
            
            if($choix == 'multiplication')
            { 
            $reponse = $nombre1 * $nombre2;
            echo 'La multiplication des nombres est '.$reponse;
            }
        
            if($choix == 'division')
            {
            $reponse = $nombre1 / $nombre2;
            echo 'Le résultat est '.$reponse;
            }
        }
        }
    else 
    {
    echo 'Veuillez renseigner tous les champs.';
    }
}
?>
</body>
</html>