<?php
// création d'un tableau indexé
$tab = [
    5,
    8,
    "coucou",
    false,
    27.12,
    [
        "coucou",
        "Vous",
        "allez",
        "bien?",
        [
            9,
            "yes",
            "je vais bien!",
        ],
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <p>Les tableaux sont la base de gestion des données en PHP comme dans la plupart des langages, on pourra également utiliser des objets, des fichier json ou xml pour faire la même chose, mais en PHP le tableau restera le principal format pour gérer toutes les données</p>
    <p>En PHP on a 2 manières de créer des tableaux : </p>
    <pre><code>
$tab = array(); // manière longue

$tab = []; // manière courte
    </code></pre>
    <h2>Les tableaux indexés</h2>
    <p>Tableaux dont les clefs ne sont pas créées par le développeur, mais par PHP</p>
    <pre><code>
// affichage avec print_r

<?php
print_r($tab);
?>
    </code></pre>
<p>Pour afficher les valeurs manuellement d'un tableau indexé, on utilise le nom de la variable avec des $var[clef]</p>
<pre><code>
echo $tab[2]." ".$tab[5][1]." ".$tab[5][2]." ".$tab[5][3]." <br>" donne :

<?=$tab[2]." ".$tab[5][1]." ".$tab[5][2]." ".$tab[5][3]." <br>";?>

<strong>Moi ce que je veux c'est (exe2) :</strong>

coucou Vous allez bien? 
yes, je vais bien!

<strong>Dans un fichier nommé 06-exe2-{prenom}.php</strong>

<strong>Et pour ceux pour qui c'est facile, je veux obtenir:</strong>

coucou, vous allez bien? 
Yes, je vais bien!

</code></pre>
<?=$tab[2]." ".$tab[5][1]." ".$tab[5][2]." ".$tab[5][3]." <br>";?>

<?=$tab[5][4][1]." ".$tab[5][4][2]." <br>";?>
</body>
</html>
