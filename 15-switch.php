<h3>avec un if</h3>

<p>On peut mélanger les 2. On peut mettre un switch dans un if.</p>

<p> Avantages du if:<br>
    on peut comparer plusieurs valeurs (||, &&, etc), on peut vérifier des typages stricts (===, <==). Onp eut égaleme,nt vérifier autres choses que des égalités.<br>
    Désavantagesdu if:<br>
    Plus lent (quand on a des conditions vraiment complexes, mais c'est un peu anecdotiques). Parfois moins lisibles</p>


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
    echo "$a - erreur";
}
?>


<h3>Avec un switch</h3>
    <a href="https://www.php.net/manual/fr/control-structures.switch.php ">switch php.net</a>

    <p>Avantages du switch:
        La vitesse fortement augmentée (mais avec les machines actuelles, sauf si on a qq chose de vraiment compliqué, c'est assez anecdotiques) car il ne recherche que les égalités - alors que le if va vérifier <=, <, =; > etc<br>
    </p>
    <p>Désavantages du switch:<br>
        Il ne vérifie que l'égalité non-stricte et qu'une seule variable à la fois.</p>
    
<?php
//on vérifie la valeur de $a de manière non-stricte (la valeur mais pas le type)
switch($a){
    case 1:
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
        echo "$a - erreur";
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
endif;

?>
<p><a href="https://www.php.net/manual/fr/control-structures.match.php">match php.net</a></p>

<p>Le switch sera très important pour le contrôleur frontal.</p>



