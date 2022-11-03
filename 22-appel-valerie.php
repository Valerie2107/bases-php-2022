<?php
include "22-functions.php";
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

<?php

/* 
function calculBasic($num1, $num2, $op = "+"){
    
    if(!is_numeric($num1)||!is_numeric($num2)){
        return "Attention, les 2 premiers paramètres doivent être numériques";
    }
    switch ($op){
        case "*":
            return $num1*$num2; // le return arrête la fonction et renvoie le résultat
            break; // break facultatif dans ce cas particulier
        case "-":
            return $num1-$num2;
            break;
        case "/":
            // si division par 0 affichage de l'erreur et arrêt du script
            if($num2==0) return "Division par 0 interdite";
            return $num1/$num2;
            break;
        default:
            return $num1+$num2;
    }
}
*/
    if(isset($_POST['first'],$_POST['op'],$_POST['second'],)){

// $reponse ="formulaire envoyé";

$num1=($_POST['first']); 
$op=($_POST['op']); 
$snum2 =($_POST['second']); 

if(is_numeric($num1) && is_numeric($snum2)){
if($op == 'division' AND $snum2 == 0){
    echo "on divise pas par 0 " ; 
}else  if($op !=null){

         switch($op){
           case"addition": $reponse =$num1 + $snum2 ; 
           break;
           case "soustraction" : $reponse= $num1 - $snum2 ; 
           break ; 
           case "multilication": $reponse = $num1 * $snum2 ; 
           break ; 
           case "division": $reponse =$num1 / $snum2 ; 
           break ;  
        }
     echo ("résultat : {$reponse}") ; 

    }    




    

}else {
echo ("Invalide , veiller réeseyer  ") ; 
}


}
?>


<form action="" name="calcul" method="POST">
    <input type="text" name="first" />
    <select name="op">
        <option value="addition">+</option>
        <option value="soustraction">-</option>
        <option value="multiplication">*</option>
        <option value="division">/</option>
    </select>
    <input type="text" name="second" />
    <input type="submit" value="Calculer"/>
</form>


    
</body>
</html>