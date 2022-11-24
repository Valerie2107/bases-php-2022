<?php
require_once "config.php";

// connexion
try{
    // création d'une variable contenant la connexion
    $DB= mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    
    //mettre le charset à la connexion
    mysqli_set_charset($db, DB_CHARSET);

}catch(Exception $e){

    //  utilisation des fonctions d'erreurs procédurales en mysqli
    echo "erreur numéro: ".mysqli_connect_errno()." Message: ".mysqli_connect_error().PHP_EOL;  // --> mauvaise pratique, mieux vaut utiliser le try catch avec exit (ou die)

    //affiche l'erreur et arrête le script
    exit(utf8_encode($e->getMessage()));
}


//je crée une variable sur base de ma table sql
$sql = "SELECT * from statistiques Order by nom asc";

// requête
$query = mysqli_query($db, $sql) or die("Erreur numéro: ".mysqli_errno($db)."Message: ").mysqli_error($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ce que Mika avait expliqué le mercredi et a changé pendant la nuit de mercredi à jeudi</h1>
</body>
</html>