<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cryptage</title>
</head>
<body>
    <h1>Cryptage</h1>
    TOUJOURS mettre le mdp par défaut en POST (sinon sera affiché dans l'URL).
    <form action="" method="post" name="pwd">
        <input type="password" name="aPassword" required/><br>
        <input type="submit" value="envoyer"/>
    </form>    

    <?php
    var_dump($_POST);    
    ?>
   <!-- <h2>Pour info </h2>  (mes notes persos pendant que Mika parlait) -->
    <p>Au début, il y avait juste login et un mot de passe. Si on indiquait les 2 correctement, PHP disait prenait la ligne entière et disait ok.<br>
    Ensuite on a rendu le craquage plus compliqué en cryptant le mdp.</p> 
    <p>On convertissait le mot de passe avec un hash. On le faisait nous-même avec une ligne de code <strong>(ne jamais utiliser les services tiers pour cela!)</strong>.</p>
    <p>On est maintenant allé encore plus loin. Avec password_hash, PHP va lui-même crypter les lui-même.<br>
    <a href="https://www.php.net/manual/fr/function.password-hash">password_hash</a><br>
    <a href="https://www.php.net/manual/fr/faq.passwords.php#faq.passwords.fasthash">hashage des mdp</a></p>


    <h2>MD5</h2>
    <p>À ne plus utiliser: trop rapide et donc peu sécurisé. Il a déjà été craqué.</p>
    <p>c'était déjà un cryptage qui ne peut pas etre inversé. Il donne une empreinte numérique.
    </p>
</body>
</html>