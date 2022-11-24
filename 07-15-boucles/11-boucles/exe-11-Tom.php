<?php
$stagiaires=[
    "Redouane",
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
    "Valerie",
];

$hasard = mt_rand(0,17);

$nb1 = -100;

$nb2 = 0;

$nb3 = 100;



?>
<?php

foreach($stagiaires as $value){

    echo $value." | ";
}
?>
<br><br>
<?php

foreach($stagiaires as $key => $value){

    echo $key." => ".$value." | ";
}
?>
<br><br>
<?php
asort($stagiaires);
foreach($stagiaires as $value){
    echo $value;
}
?>
<br><br>
<?php
$nb=0;
    while($nb <= $hasard){
    echo "$nb , ";
    $nb++;
}
?>
<br><br>
<?php
for($nb3 = 100 ; $nb3 >= -100 ; $nb3-=3){

        echo "$nb3 ";
}
?>