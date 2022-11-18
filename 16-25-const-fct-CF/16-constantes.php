<h3>Les constantes</h3>
<p>Ce sont des variables qui doivent être initialisées avec une valeur. Celle-ci ne peut être changée après l'initialisation. On peut utiliser define ou const en PHP pour créer celles-ci</p>
<h4>define("NOM_MAJUSCULE",{valeur})</h4>
<p>
<?php
define("UNE_CONSTANTE","une chaîne de caractère");

echo UNE_CONSTANTE;

// erreur car déjà définie !
// define("UNE_CONSTANTE",25);
echo "<br> ".UNE_CONSTANTE." est affichée";

define("DB_HOST","localhost");
define("TABLEAU",['un',
                  'deux',
                  'trois',
]);
echo "<br>".DB_HOST;
// erreur, affichage d'un tableau
//echo "<br>".TABLEAU;
//echo "<br>".TABLEAU;
const LULU = 2;

echo "<p>".LULU."</p>";

var_dump(TABLEAU);

echo "<br>".TABLEAU[0];
?></p>
<h4>const NOM_CONSTANTE = {valeur}</h4>
<p>fonctionne de la même manière, vient de l'orienté objet (OO)<br>
<?php
const DB_PWD = "kjyzefkjherf5335dfgjklhf48ghtgDFG65è§3é";
echo DB_PWD;