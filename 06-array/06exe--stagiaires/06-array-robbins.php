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


echo $tab[2]." ".$tab[5][1]." ".$tab[5][2]." ".$tab[5][3]."<br/>";
echo $tab[5][4][1]." , ".$tab[5][4][2];
?>