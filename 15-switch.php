<h3>Avec un if</h3>
<p>Avantages : on peut comparer plusieurs valeurs (&& , ||, etc), on peut vérifier des typages strict (===, <==), on peut vérifier autre chose que des égalités</p>
<p>Désavantage : plus lent, parfois moins lisible</p>
<?php

$a = mt_rand(1,5);

if($a===1){
    echo "$a - premier";
}elseif($a===2){
    echo "$a - deuxième";
}elseif($a===3){
    echo "$a - troisième";
}elseif($a===4){
    echo "$a - quatrième";
}elseif($a===5){
    echo "$a - cinquième";
}else{
    echo "$a - Erreur";
}
?>
<h3>Avec un switch</h3>
<p>Avantage : vitesse fortement augmentée</p>
<p>Désavantages : ne vérifie que l'égalité non stricte, et qu'une variable à la fois</p>
<?php
// on vérifie la valeur de $a de manière non stricte (la valeur mais pas le type) comme ==
switch($a){
    // si ça vaut 1 (non strictement => "1" | 1 | true)
    case "1":
        echo "$a - premier";
    break;
    case 2:
        echo "$a - deuxième";
    break;
    case 3:
        echo "$a - troisième";
    break;
    case 4:
        echo "$a - quatrième";
    break;
    case 5:
        echo "$a - cinquième";
    break;
    default:
        echo "$a - Erreur";
}
?>
<p>Equivalence des && avec switch</p>
<?php
$temp= mt_rand(-5,5);

switch($temp){
    case -5:
    case -4:   
    case -3:
    case -2:
    case -1:
    case 0:
        echo "Il gèle à {$temp}°";
        break;
    default:
        echo "L'eau est liquide à {$temp}°";
}
echo "<hr>";
if($temp<=0):
    echo "Il gèle à {$temp}°";
else:
    echo "L'eau est liquide à {$temp}°";
endif

?>


