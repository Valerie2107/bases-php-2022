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


$hasard = mt_rand(0,17);

$nb1 = -100;

$nb2 =0;

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
    <h1>Exercice sur les boucles</h1>
    <p>Créer dans ce dossier un fichier exe-11-coralie.php en copiant celui-ci </p>
    <?php
    

    ?>


    <h3>Exe 1</h3>
    <p>Affichez tous les noms de la varible $stagiaires séparés par un " | "</p>
    <?php
    foreach($stagiaires as $value){
        echo $value." | ";
    }
    ?>


    <h3>Exe 2</h3>
    <p>Affichez tous les noms de la varible $stagiaires séparés par un " | " avec leur clef : exemple <code> 0 -> Redouan | 1 -> Coralie</p>
    <?php
foreach($stagiaires as $key => $value){
    echo $key." => ".$value." | ";

}
    ?>


    <h3>Exe 3</h3>
    <p>Voir la doc sur les tableaux : Affichez tous les noms des variables stagiaires classés par ordre alphabétique séparés par un " | " </p>
    <?php
        echo "<p>asort -> classe par valeurs ascendantes en gardant la clef liée à sa valeur</p>"; 
        asort($stagiaires);
        foreach($stagiaires as $key => $value){
            
            echo $value." - $key | " ;
            
        };
        echo "<hr>";
        echo "<p>sort -> classe par valeurs ascendantes en réinitialisant la clef qui n'a plus de lien d'origine avec la clef</p>";
        sort($stagiaires);
        foreach($stagiaires as $key => $value){
            
            echo $value." - $key | " ;
            
        };
        ?>

    


    <h4>Exe 4</h4>
    <p>Affichez les chiffres de 0 à la valeur de la variable $hasard (entiers positif : 0, 1, 2, 3, ...)</p>
<?php
    $nb = 0;
    while($nb <= $hasard){
        echo "$nb  ";
        $nb++;
    }
    echo "<br>";

    ?>

<h4>Exe 5</h4>
    <p>Faites une boucle allant de $nb3 à $nb1 en diminuant la valeur de 3 (100, 97, 94 ect..)</p>

    <?php

    for($i = $nb3 ; $i >= $nb1 ; $i-=3){
        echo "$nb3 ";
    }
    

    ?>

</body>
</html>