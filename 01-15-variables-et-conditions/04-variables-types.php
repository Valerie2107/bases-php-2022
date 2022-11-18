<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les types de variables</title>
</head>
<body>
    <h1>Les types de variables</h1>
    <h2>Les string (text)</h2>
    <p>Les chaînes de caractères sont mises dans des variables de type string ou str, ce sont les variables les plus utilisées pour l'affichage de texte dans les sites web</p>
    <p>On peut les utiliser et les mettre une à la suite de... Cela s'appelle la concaténation.</p>
    <?php
    // création de la variable (ici en camelCase), avec le = qui donne la valeur. En procédural, le typage strict n'est pas obligatoire
    $monTitre = "Bientôt la fin de ce cours interminable !";

    // affichage du contenu de la variable avec une chaîne concaténée (utilisation du . ou de la virgule) - gettype est une fonction permettant de récupérer le typage d'une variable (en PHP 8 on utilisera plutôt get_debug_type())
    echo $monTitre." Yes! <br>";
    echo "Le type de la variable est ".gettype($monTitre).' !';
    ?>
    <p>Il existe des centaines de fonctions pour gérer du texte, par exemple</p>
    <?php
    echo 'mettre tout en majuscule : mb_strtoupper($monTitre) '.mb_strtoupper($monTitre);
    ?>
    <p><a href="https://www.php.net/manual/fr/book.strings.php" target="_blank">string</a></p>
    <h2>Les numériques</h2>
    <p>Les numériques sont les variables les plus utilisées pour les calculs, il existe plusieurs sous-types de ceux-ci</p>
    <h3>Les entiers (integer, int)</h3>
    <p>Sont des entiers les nombres sans virgules, positifs comme négatifs</p>
    <pre>$myFirstInt = 22;
$mySecondInt = - 7;</pre>
    <p>Les calculs de base se font avec les signes + - * /</p>
    <?php
    $myFirstInt = 22;
    $mySecondInt = - 7;

    echo $myFirstInt;
    echo "<br>";

    // addition
    $add = $myFirstInt + $mySecondInt;
    echo $add;
    echo "<br>";

    // soustraction
    $sous = $myFirstInt - $mySecondInt;
    echo $sous;
    echo "<br>";

    // multiplication
    $multi = $myFirstInt * $mySecondInt;
    echo $multi;
    echo "<br>";

    // division
    $div = $myFirstInt / $mySecondInt;
    echo $div;
    echo " - Ce dernier, résultat de la division, devient un float<br>";


    ?>

    <h3>Les chiffres à virgule (float, double, nombres réels)</h3>
    <p>Ils ont le type float, attention en cas de calcul en base 10, on peut avoir des erreurs du au fait que les ordinateurs travaillent sur les calculs en base 16<br>! On utilise le . et pas la , comme séparateur ! <a href="https://floating-point-gui.de/" target="_blank">What Every Programmer Should Know About Floating-Point Arithmetic</a></p>

    <?php
    $firstFloat = 8.27;
    $secondFloat = -79.789435185755468; // il manque 3 caractères

    ?>
    <h2>Les booléens (bool, boolean)</h2>
    <p>Variable représentant sur un seul bit les 2 possibilités du binaire: true ou false </p>
    <?php
    $bool1 = true;
    $bool2 = false;
    ?>
    <h2>Les type NULL (NULL)</h2>
    <p>Le type NULL est une variable sans valeurs</p>
    <?php
    $nada = NULL;
    ?>
    <h2>Les type tableaux (array)</h2>
    <p>Les tableaux permettent de contenir plusieures variables à l'intérieur d'une variable de type array. Ils sont multidimentionnels, càd on peut avoir autant de tableaux que nécessaire dans un tableau.</p><p>Il existe 2 types de tableaux : Les tableaux indexés, et les tableaux associatifs</p>
    <h3>Tableau indexé</h3>
    <p>Il ne contient que des valeurs, les clefs sont attribuées par PHP</p>
    <?php
    // création d'un tableau indexé
    $tab1 = array(5,"Lulu","Dupuis",true);
    // débogage de tableaux ou objets avec print_r, moins complet que le var_dump
    print_r($tab1);
    // on veut afficher la 2eme clef:
    echo $tab1[1];
    ?>
    <h3>Tableau associatif</h3>
    <p>Tableau dont on a indiqué au moins 1 des clefs, ce qui en fait un tableau associatif</p>
    <?php
    // création d'un tableau associatif
    $tab2 = array( "un"=>1,
                   "deux"=>2,
                   "trois"=>3,
                   4 => "coucou", 
                   "lala",
                   array(1,2,3),
                 );
    // débogage de tableaux ou objets avec print_r, moins complet que le var_dump
    print_r($tab2);
    echo $tab2["deux"];
    ?>
    <hr>
    <?php
    // outil de débogage le plus commun
    var_dump($monTitre,$myFirstInt,$mySecondInt, $add, $sous, $multi,$div,$firstFloat,$secondFloat,$bool1,$bool2,$nada,$tab1,$tab2);

    ?>

</body>
</html>