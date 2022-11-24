<?php

// commentaire sur une ligne blabla

# une autre manière de faire un commentaire sur une ligne un commentaire sur une ligne un commentaire sur une lignun commentaire sur une ligneun commentaire sur une ligne toujours sur la ligne 5

/*
Commentaires
sur plusieures
lignes
*/
?>
<p>Commentaire html</p>
<!--
ceci est un commentaire html, il sera envoyé au navigateur !
-->
<?php

// bonne pratique, ne pas fermer la balise php quand ce n'est pas utile

// affichage avec echo, le ; est la fin de l'instruction, on peut en mettre sans limite sur la même ligne, ou séparer les instructions par autant d'espace que voulu (mauvaise pratique, mais PHP s'en fout). La fonction time() vous donne le timestamp (temps UNIX en secondes depuis le 01/01/1970)
echo "<p>Temps Unix de la page :"; echo time();



                echo "</p>";