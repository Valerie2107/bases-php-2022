<h3>Les constantes</h3>
<p>Ce sont des variables qui doivent être initialisées avec une valeur. Celle-ci ne peut être changée après l'initialisation. On peut utiliser define ou const en PHP pour créer celles-ci</p>
<h4>define("NOM_MAJUSCULE",{valeur})</h4>

<!--- on est obligé de directement donner une valeur à une constante.
        plus tard dans le code, je ne pourrai pas modifier cette valeur (d'où le nom de constante)
    
            - en PHP, on n'a pas besoin du $ pour le nom de la constante-->

<!-- - en PHP quand je mets une constante entre "", avec echo il m'affiche LULU car il ne repère pas que c'ets une constante et m'affiche un string. <br>
        si je veux la valeur qui est entre "", CONST_LULU = 2   alors je dois concaténer avec des . devant et derrière CONST_LULU = ".2."-->
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

var_dump(TABLEAU);

echo "<br>".TABLEAU[0];
?>

<h4>const NOM_CONSTANTE = {valeur}</h4>
<p>fonctionne de la même manière. vient de l'orienté objet (OO)<br>
On peut aussi bien utiliser const que define</p>
<!--- on déclare une constante avec CONST.<br>
        on écrit cette constante toujours en MAJUSCULE<br>
        on peut aussi utiliser DEFINE<br>
        on va écrire toujours ainsi: DEFINE("NOM_EN_MAJUSCULE")
    
    
    
    
    - je recupère le GET en PHP avec $_GET - majuscule importante car sinon PHP ne comprend pas. C'est une super globale et c'est une convention d'écriture définie et fixée<br>-->