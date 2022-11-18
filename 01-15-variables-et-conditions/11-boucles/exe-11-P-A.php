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

echo "Exe1 <br>";
foreach($stagiaires as $value){
    echo $value." | ";
}
echo "<br>";

echo "Exe2 <br>";
foreach($stagiaires as $key => $value){
    echo $key." => ".$value." | ";

}
 echo "<br> Exe3 <br>";
 sort($stagiaires);
 foreach($stagiaires as $value){
    echo $value." | ";
 }
 echo "<br> Exe4 <br>";

$hasard = mt_rand(0,17);

$nb = 0;
    while($nb <= $hasard){
        echo "$nb ,";
        $nb++;
    }

echo " <br> Exe5 <br>";

$nb1 = -100;

$nb2 = 0;

$nb3 = 100;

while ($nb3>=$nb1) {
    echo "$nb3 ,";
    $nb3-=3;
}


?>