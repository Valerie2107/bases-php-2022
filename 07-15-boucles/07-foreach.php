<?php

/*
 le concept de boucle est important dans tous les langages, en PHP il existe diverses manières de créer des boucles :

 foreach => boucles sur les tableaux et objets
 for => boucles de type numériques
 while => boucle de vérification true
 do while => boucle de vérification true avec 1 exécution obligatoire
 fonctions récursives => Vous créez vos propres boucles ! 

 Les boucles ne doivent jamais être infinies.

 */

 $tab1 = ["un","deux","trois","quatre","cinq"];

 // affichage de toutes les valeurs du tableau
 foreach($tab1 as $value){
    echo $value." ";
 }
 echo "<hr>";

 // idem avec un for (ne fonctionne qu'avec les tableaux indexés)
 for($i=0;$i<count($tab1);$i++){
    echo $tab1[$i]." ";
 }
 echo "<hr>";

// affichage de toutes les clef et valeurs du tableau
foreach($tab1 as $key => $value){
    echo $key." -> ".$value." <br>";
}
 echo "<hr>";

foreach($tab1 as $clef => $valeur){
    echo $clef." -> ".$valeur." <br>";
}
 echo "<hr>";

 // tableau associatif
 $tab2 = [
    "un"=>1,
    "deux"=>2,
    3=>3,
    "yep"=>"ça va?",
    4=>"quatre",
 ];

 echo "<p>tableau associatif, le foreach est préférable à toutes les autres boucles (90%)</p>";

 // tant qu'on a des éléments dans le tableau, on les liste du premier au dernier
 foreach($tab2 as $value){
    echo "$value ";
 }
 echo "<hr>";

 foreach($tab2 as $key => $value){
    //echo $key." -> ".$value."<br>";
    echo "$key -> $value<br>";
    //echo $key;
 }
