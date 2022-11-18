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
    <title>Exe2</title>
</head>
<body>
    <h1>exercice PHP</h1>
    <p><strong>Moi ce que je veux c'est (exe2) :</strong></p>

    <?php
    echo $tab[2]. " ".$tab[5][1]. " ".$tab[5][2]. " ".$tab[5][3]. "<br>";
    echo $tab[5][4][1]. " ".  $tab[5][4][2];
    ?>

    <p><strong>Dans un fichier nommé 06-exe2-valerie.php</strong></p>
    <br>
    <p><strong>Et pour ceux pour qui c'est facile, je veux obtenir:</strong></p>
        







</body>
</html>