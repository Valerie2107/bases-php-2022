<?php
require_once "config.php";


// connexion ancienne version

    // création d'une variable contenant la connexion
    $db = @mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);

    // si erreur
    if(mysqli_connect_errno()){
        //sortie et affichage du code de l'erreur et son message
        die("Erreur numéro : ".mysqli_connect_errno()." Message : ".mysqli_connect_error());
    }
    // mettre le charset à la connexion
    mysqli_set_charset($db, DB_CHARSET);

// sélectionne tout depuis la table stat ordonné par nom ascendant
$sql = "SELECT * FROM statistiques ORDER BY nom ASC";

// requête sans try catch
$query = mysqli_query($db,$sql) or die("Erreur numéro : ".mysqli_errno($db)." Message : ".mysqli_error($db));

//on compte le nombre de résultats
$nb = mysqli_num_rows($query)

//si on n'a pas de résultat, on va vérifier si c'est vide
if (empty($nb)){
    $affiche = "Pas encore de pays répertorié"
}

//J'AI LACHE LE COURS


?>