<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fonctions utilisateurs</title>
</head>
<body>
    <h1>Les fonctions utilisateurs</h1>
    <p>En PHP, on peut créer une nouvelle fonction en utilisant le mot clef 'function', suivi d'un nom (utilisation du même nommage que les variables sans le $) et de parenthèses qui peuvent contenir des arguments/paramètres, et le contenu de la fonction dans les { }</p>
    <pre><code>
function creeDesTensionsDansLeGroupe(){
    return date("Y-m-d H:i:s");
}
    </code></pre>
<?php
// création de la fonction sans arguments
function creeDesTensionsDansLeGroupe(){
    // retour d'une valeur, ici le datetime (https://www.php.net/manual/fr/datetime.format.php) par un return
    return date("Y-m-d H:i:s");
    // tout ce qui est après l'appel d'un return ne sera pas exécuté
}

echo creeDesTensionsDansLeGroupe();
?>
<h2>Les fonctions avec arguments</h2>
<p>Les paramètres ou arguments sont obligatoires si déclarés et sans valeurs par défaut</p>
<pre><code>
function calculBasic($num1, $num2, $op = "+"){
    
}
    </code></pre>
<?php
function calculBasic($num1, $num2, $op = "+"){
    // on inverse la condition avec !, attention le && devient ||
    if(!is_numeric($num1)||!is_numeric($num2)){
        return "Attention, les 2 premiers paramètres doivent être numériques";
    }
    switch ($op){
        case "*":
            return $num1*$num2; // le return arrête la fonction et renvoie le résultat
            // break facultatif dans ce cas particulier
        case "-":
            return $num1-$num2;
            
        case "/":
            // si division par 0 affichage de l'erreur et arrêt du script
            if($num2==0) return "Division par 0 interdite";
            return $num1/$num2;
           
        default:
            return $num1+$num2;
    }
}

echo calculBasic(7,5);
echo "<hr>";
echo calculBasic(25,83,"-");
echo "<hr>";
echo calculBasic(25,83,"*");
echo "<hr>";
echo calculBasic(25,83,"/");
echo "<hr>";
echo calculBasic(25,83,"connerie");
echo "<hr>";
echo calculBasic("jhgjhg",83,"connerie");
echo "<hr>";
echo calculBasic(27,0,"/");
echo "<hr>";
?>
</body>
</html>