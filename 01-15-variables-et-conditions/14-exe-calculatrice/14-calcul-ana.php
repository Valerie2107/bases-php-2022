<?php
//si il existe les variable POST 
if(isset($_POST['first'],$_POST['choix'],$_POST['second'],)){

    $reponse ="formulaire envoyé";

  $firstNomber=($_POST['first']); 
  $choix=($_POST['choix']); 
  $seconNomber =($_POST['second']); 

  if(is_numeric($firstNomber) && is_numeric($seconNomber)){
    if($choix == 'division' AND $seconNomber == 0){
        echo "on divise pas par 0 " ; 
    }else  if($choix !=null){

             switch($choix){
               case"addition": $reponse =$firstNomber + $seconNomber ; 
               break;
               case "soustraction" : $reponse= $firstNomber - $seconNomber ; 
               break ; 
               case "multilication": $reponse = $firstNomber * $seconNomber ; 
               break ; 
               case "division": $reponse =$firstNomber / $seconNomber ; 
               break ;  
            }
         echo ("le resultat c'est : <b> {$reponse}</b>") ; 

        }    




        

    }else {
    echo ("Invalide , veiller réeseyer  ") ; 
 }


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

    <hr>
    <?php
    var_dump($_POST);
    ?>
</body>
</html>