
<h1>Les constantes</h1>
<p>Ce sont des variables qui doivent être intitialisées avec une valeur. Celle-ci ne pourra plus être changée après l'initialisation.</p>
<p>Cette variable ne pourra pas être attaquéeé (sauf par quelqu'un qui aurait le code source). On ne peut pas injecter un script et changer mes constantes dans la valeur puisqu'elle est déjà définie et inchangeable.<br>
les constantes sont généralement mises dans le dossier de configuration. 
</p>
<p>On peut utiliser define ou const en PHP pour créer celles-ci.</p>

<h4>define("NOM_MAJUSCULE,{valeur})</h4>
<?php
//une constante sera toujours écrite en majuscule avec des underscores.
define("UNE_CONSTANTE", "une chaîne de caractères");
    echo UNE_CONSTANTE;

//erreur car elle est déjà définie.

//généralement ce sont des paramètres de connnexion dans les variables et on ne veut pas que les gens y aient accès.

//define("UNE_CONSTANTE3, 25);
echo "<br> ".UNE_CONSTANTE." est affichée";

define("DB_HOST","localhost");
define("TABLEAU",["un",
                    "deux",
                    "trois",

]);
echo"<br>".DB_HOST;
//erreur affichage d'un tableau
//echo "<br>".TABLEAU;
array_push(TABLEAU,["lala"]);
var_dump(TABLEAU);
echo"<br>".TABLEAU[0];
?>