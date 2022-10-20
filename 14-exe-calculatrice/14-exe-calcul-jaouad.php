<?php
// si il existe les variables POST
if(isset($_POST['first'],$_POST['choix'],$_POST['second'])){
  
    // si les deux variables POST 'first' et 'second' sont de type numérique
    if(is_numeric($_POST['first'])&& is_numeric($_POST['second'])){
  
        // On assigne à des variables locales et on convertit nos variables aux formats float (on garde les , si il y en a) choisis pour $nb1 et $nb2
        $nb1 = (float) $_POST['first'];
        $choix = $_POST['choix'];
        $nb2 = (float) $_POST['second'];

        if($choix == 'division' AND $nb2 == 0)
        {
            $reponse= 'Erreur, division par 0 !';
        }
        else
        { 
            if($choix == 'addition')
            {
                $reponse='La reéponse est '.($nb1 + $nb2);
            }
            
            elseif($choix == 'soustraction') 
            {
                $reponse = 'La réponse est '.($nb1 - $nb2); 
      
            }
            
            elseif($choix == 'multiplication')
            { 
                $reponse = 'La réponse est '.($nb1 * $nb2);
     
            }
        
            elseif($choix == 'division')
            {
                $reponse = 'La réponse est '.($nb1 / $nb2);
            }
            else{
                $reponse = "Tu as trafiqué mon formulaire !!!";
            }
        }
    }
    else 
    {
        $reponse = 'Formats entrés invalides';
    }
}else{
    $reponse = "Veuillez rentrer les numériques et cliquez sur Calculer";
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
    <h3>
    <?php
    if(isset($reponse)):
        echo $reponse;
    endif;
    ?>
    </h3>
    <hr>
</body>
</html>
</body>
</html>