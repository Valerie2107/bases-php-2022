<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle for</title>
</head>
<body>
<h1>boucle for</h1>
<p>Le for est souvent utilisé pour afficher des listes numériques, (classement, pagination, etc...)</p>
<p>Par défaut on utilise généralement $i comme variable (itération), la règle la plus commune étant de mettre $i à 0 ou à 1 (Déclaration, ne se fait qu'une fois au début de la boucle), d'effectuer la boucle tant que $i sera plus petit ou plus grand qu'un nombre choisi (Condition, doit devenir false pour éviter la boucle infinie), on modifie ensuite la valeur de $i (Changement) pour éviter la boucle infinie</p>
<pre><code>for(Déclaration ; Condition ; Changement){ ... exécution }
</code></pre>
<h3>Incrémentation de 1</h3>
<p>Ajouter 1 à une variable de type numérique</p>
<pre><code>$i=5;
$i = $i+1;
echo $i; // 6
$i += 1;
echo $i; // 7
$i++;
echo $i; // 8
echo $i++; // 8 car affiche $i avant d'ajouter 1
echo $i // 9
echo ++$i; // 10 car l'incrémentation se fait avant l'affichage
</code></pre>
<?php
// $i vaut 1 au premier tour, il passe la condition, après l'exécution il effectue le changement et recommence la boucle (sans repasser par la Déclaration ou Initialisation)
for($i=1; $i <= 200; $i++){
    echo "$i ";
}
?>
<h3>Incrémentation de plus de 1</h3>
<p>Si on veut incrémenter d'un autre chiffre que 1, l'utilisation du += est le plus courant</p>
<?php
for($i= -10; $i<=10; $i+=2){
    echo "$i ";
}
?>
<h3>Décrémentation de 1</h3>
<p>Soustrait 1 de la variable</p>
<pre><code>$i=5;
$i = $i-1;
echo $i; // 4
$i -= 1;
echo $i; // 3
$i--;
echo $i; // 2
echo $i--; // 2 car affiche $i avant de diminuer de 1
echo $i // 1
echo --$i; // 0 car la décrémentation se fait avant l'affichage
</code></pre>
<?php
// Affichez-moi les chiffres de 100 à 0 séparés par un espace
for($i=100; $i>=0; $i--){
     echo "$i ";
}
echo "<hr>";
// Affichez-moi tous les paires entre 2 et 1000 séparés par un espace
for ($i=2;$i<=1000;$i+=2){
    echo "$i ";
}
echo "<hr>";
// Affichez-moi tous les impaires entre 1 et -99 séparés par un espace
for($i=1;$i>=-99;$i-=2){
    echo "$i ";
}
echo "<hr>";
?>
</body>
</html>


