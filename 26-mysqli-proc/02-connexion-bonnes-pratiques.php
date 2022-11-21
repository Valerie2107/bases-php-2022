<?php
// Nos paramètres de connexion
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion avec mysqli bonnes pratiques</title>
</head>
<body>
    <h1>Connexion avec mysqli</h1>
    <h2>Méthode procédurale</h2>
    <h3>mysqli_connect avec un try catch</h3>
    <p>Voir la page sur <a href="https://www.php.net/manual/fr/mysqli.construct.php" target="_blank">php.net</a></p>
    
    <code><pre>
// Essai de connexion    
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
    </pre></code>
    <h4>Connexion avec try catch</h4>
    <p>Connexion avec un var_dump pour tester notre connexion</p>
    <?php
// Essai de connexion    
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
    //var_dump($mysqliConnect);
    ?>
    <h4>Déconnexion</h4>
    <p>Optionnel mais doit être mis pour les bonnes pratiques.<br>En effet en mysql ou mariaDB les connexions se ferment automatiquement en fin de script. ! En cas de connexion permanente, il ne faut pas l'utiliser!<br>Les connexions permanentes sont utilisées sur les gros serveurs ayant les capacités de les supporter (gain de vitesse)</p>

    <!-- mon texte dans le p
    <p>Optionnel - mais conseillé par les bonnes pratiques.<br>
                en mysql ou maria DB, les connexions se ferment automatiquement en fin de script - gain de vitesse et économie sur la puissance du serveur.<br>
                Si trop de connexions ont lieu en même temps, on aura un time-out et le user potentiel ne pourra pas se connecter.</p>
                <p>En cas de connexions permanentes, il ne faut pas l'utiliser!<br>
                Les connexions permanentes  sont utilisées sur les gros serveurs ayant les capacités de supporter énormément de connexions en même temps.</p>  -->

    <h3>mysqli_close</h3>
    <code><pre>
mysqli_close($mysqliConnect);

var_dump($mysqliConnect);
    </pre></code>
    <?php
mysqli_close($mysqliConnect);

var_dump($mysqliConnect);
    ?>
</body>
</html>
<?php
