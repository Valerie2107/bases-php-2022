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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>
<body>
    <h1>Exercices sur les boucles</h1>
    <p>Créez dans ce dossier un fichier exe-11-{prénom}.php en copiant celui-ci</p>
    <?php

    ?>
    <h3>Exe 1</h3>
    <p>Affichez tous les noms de la variable $stagiaires séparés par un " | "</p>
    <?php
    foreach($stagiaires as $value){
        echo $value." | ";
    }

    ?>
    <h3>Exe 2</h3>
    <p>Affichez tous les noms de la variable $stagiaires séparés par un " | " avec leur clef: exemple <code>0 -> Redouan | 1 -> Coralie ...</code></p>
    <?php
    foreach($stagiaires as $key => $value){
        echo $key." | ".$value." <br>";
    }

    ?>
    <h3>Exe 3</h3>
    <p>Voir la doc sur les tableaux : Affichez tous les noms de la variable $stagiaires classés par ordre alphabétique séparés par un " | "</p>
    <?php
    sort($stagiaires);
    foreach($stagiaires as $value){
        echo "$value | ";
    }
    ?>
    <h4>Exe 4 </h4>
    <p>Affichez les chiffres de 0 à la valeur de la variable $hasard (entiers positif : 0, 1, 2, 3, ...) séparés par des ,</p>
    <?php
    $hasard = mt_rand(0,17);
    for($i=1; $i <= $hasard; $i++){
        echo "$i, ";
    }

    ?>
    <h4>Exe 5 </h4>
    <p>faites une boucle allant de $nb3 à $nb1 en diminuant la valeur de 3 (100, 97, 94 etc...) séparés par des virgules</p>
    <?php
    

    while($nb3 >= $nb1){
        echo "$nb3 ,";
        $nb3 -= 3;
    }
    echo "<br>";
    ?>

   
</body>
</html>