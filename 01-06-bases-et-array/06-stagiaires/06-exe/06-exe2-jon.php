<?php
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
// Moi ce que je veux c'est (exe2) :

// coucou Vous allez bien? 
// yes, je vais bien!

// coucou, vous allez bien? 
// Yes, je vais bien!
echo ucfirst($tab[2]).", ".strtolower($tab[5][1])." ".$tab[5][2]." ".$tab[5][3]."<br>".ucfirst($tab[5][4][1]).", ".$tab[5][4][2];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe2 Jon</title>
</head>
<body>
    
</body>
</html>