<?php

//je peux faire un commentaire sur ma ligne

#une autre maniere de faire un commentaire sur une ligne. la taille de ma ligne est infinie - elle ne se terminera que lorsque je ferai ENTER

/* ceci est une maniere de faire un 
commentaire sur plusieurs lignes 
- par contre je suis obligée de le fermer
*/

//je ferme mon php pour l'exercice apres

?>

<!-- ceci est un commentaire HTML qui sera affiché dans la console-->

<?php

//bonne pratique: ne pas fermer mon PHP si cela n'est pas nécessaire

/*   on peut mettre des instructions sans limite sur une ligne, la seule chose importante est de toujours bien mettre un ; pour signifier la fin d'une instruction
cela est n'empeche une mauvaise pratique, même si PHP n'en tient pas compte et affichera correctement ce que j'ai codé. Mais il sera difficile de relire le code*/

echo"<p>Temps Unix de la page:"; echo time();


                echo"</p>";