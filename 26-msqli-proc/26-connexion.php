<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion avec mysqli</title>
</head>
<body>
    <h1>Connexion avec mysqli</h1>
        <h2>méthode procédurale</h2>
            <h3>mysqli_connect</h3>
                <p>voir également sur <a href="https://www.php.net/manual/fr/mysqli.construct.php" target="_blank">php.net</a></p>

                <?php
                    $mysqliConnect = mysqli_connect("localhost","root")

                    // rien n'est complet, j'ai lâché le cours

            
                ?>

    <code><pre>

    </pre></code>

                <h4>Déconnexion</h4>
                <p>Optionnel - mais conseillé par les bonnes pratiques.<br>
                en mysql ou maria DB, les connexions se ferment automatiquement en fin de script - gain de vitesse et économie sur la puissance du serveur.<br>
                Si trop de connexions ont lieu en même temps, on aura un time-out et le user potentiel ne pourra pas se connecter.</p>
                <p>En cas de connexions permanentes, il ne faut pas l'utiliser!<br>
                Les connexions permanentes  sont utilisées sur les gros serveurs ayant les capacités de supporter énormément de connexions en même temps.</p>

                <!-- rien n'est complet, j'ai lâché le cours   -->

</body>
</html>