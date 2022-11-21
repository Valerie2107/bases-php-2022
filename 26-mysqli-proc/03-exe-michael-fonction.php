<?php
// Nos paramètres de connexion
require_once "config.php";

// Notre connexion    
try {
    // connexion à la DB mysql "statistiques"
    $mysqliConnect = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);

    // application du charset à notre connexion
    mysqli_set_charset($mysqliConnect, DB_CHARSET);

// capture de l'erreur plutôt que son affichage immédiat
}catch(Exception $e){

    // affichage de l'erreur encodée en utf8 avec utf8_encode()
    echo utf8_encode($e->getMessage());

}

// création d'une variable contenant du string, qui est en réalité du SQL
$sql = "SELECT * FROM `statistiques` ORDER BY `nom`  ASC ;";


// exécution de la requête avec mysqli_query, en cas d'échec, on arrête le script et on affiche l'erreur avec mysqli_error() et son numéro avec mysqli_erno
$query = mysqli_query($mysqliConnect,$sql) or die("Erreur numéro ".mysqli_errno($mysqliConnect)." lors de la requête :".mysqli_error($mysqliConnect));

// on vérifie combien de résultats on a obtenu avec notre select
$nbPays = mysqli_num_rows($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Première requête</title>
</head>
<body>
    <h1>Première requête</h1>
    <h2>Nombre de pays <?=$nbPays?></h2>
    <?php
// si on a pas récupéré de pays (écriture sans {} dans l'html) 
if(empty($nbPays)) :

    // affichage de l'erreur sans utiliser echo (pratique pour un designe externe)
    ?>
    <h3>Pas de pays !</h3>
    <?php
// sinon (on a au moins un pays)
else:

    // tant qu'on a des lignes de résultats (pas de foreach car l'objet n'est pas traité à l'avance, utilisation de while) - mysqli_fetch_assoc convertit, ligne après ligne, le résultat en tableau associatif
    while($item = mysqli_fetch_assoc($query)):

        // affichage des pays par ordre alphabétique
    ?>
    <p><?=$item['nom']?> - <?=$item['population']?></p>
    <?php
    // fin de boucle
    endwhile;
// fin de if
endif;
    ?>
</body>
</html>
<?php
// bonne pratique, fermeture de connexion (inutile pour mysql et mariaDB)
mysqli_close($mysqliConnect);