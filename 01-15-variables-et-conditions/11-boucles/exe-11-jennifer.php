

<?php
$stagiaires=[
    "Redouan",
    "Coralie",
    "Florence",
    "Tom",
    "Billy",
    "Jaouad",
    "Frédéric",
    "Maksym",
    "Magib",
    "Pierre-Alain",
    "Youssef",
    "Jonathan",
    "Melvin",
    "Yanis",
    "Robbins",
    "Ana-Maria",
    "Jennifer",
    "Valérie",
];

// chiffre au hasard de 0 à 17
$hasard = mt_rand(0,17);

$nb1 = -100;

$nb2 = 0;

$nb3 = 100;

?>
<hr>
<h1>Exe1</h1>
<hr>
<p>Affichez tous les noms de la variable $stagiaires séparés par un " | "</p><hr><br>
<?php
foreach($stagiaires as $value){
    echo $value."| ";
}
?>
<br>

<h1>Exe2</h1>
<hr>
<p>Affichez tous les noms de la variable $stagiaires séparés par un " | "</p>
<hr>
<?php
foreach($stagiaires as $key => $value){
    echo $key." -> ".$value." <br>";
}
?>
<br>

<h1>Exe3</h1>
<hr>
<p>Voir la doc sur les tableaux : Affichez tous les noms de la variable $stagiaires classés par ordre alphabétique séparés par un " | "</p>
<hr>
<?php

$stagiairesArrayObject=  new ArrayObject ($stagiaires);
$stagiairesArrayObject->asort();//asort garde les clefs et sort réinitialise les clefs

foreach($stagiairesArrayObject as $value ){

    echo "$value\n| ";
}
?>
<br>

<h1>Exe4</h1>
<hr>
<p>Affichez les chiffres de 0 à la valeur de la variable $hasard (entiers positif : 0, 1, 2, 3, ...) séparés par des ,</p>
<hr>
<?php




for($i=0; $i<=$hasard; $i++){
    echo "$i, ";
}



?>
<h1>Exe5</h1>
<hr>
<p>Faites une boucle allant de $nb3 à $nb1 en diminuant la valeur de 3 (100, 97, 94 etc...) séparés par des virgules</p>
<hr>
    
<?php

$nb1 = -100;
$nb3 = 100;

for($i=$nb3; $i>=$nb1; $i-=3){
    echo "$i, ";
}

?>