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
    <p>TOUJOURS mettre le mdp par défaut en POST (sinon sera affiché dans l'URL).</p>
    <form action="" method="post" name="pwd">
        <input type="password" name="aPassword" required/><br>
        <input type="submit" value="envoyer"/>
    </form>    

    <?php  //pour les tests plus loin dans le fichier
    var_dump($_POST);  
    if(isset($_POST['aPassword']));  
    ?>
   <!-- <h2>Pour info </h2>  (j'ai pris beaucoup de notes persos pendant que Mika parlait) -->
    <p>Au début, il y avait juste login et un mot de passe. Si on indiquait les 2 correctement, PHP disait prenait la ligne entière et disait ok.<br>
    Ensuite on a rendu le craquage plus compliqué en cryptant le mdp.</p> 
    <p>On convertissait le mot de passe avec un hash. On le faisait nous-même avec une ligne de code <strong>(ne jamais utiliser les services tiers pour cela!)</strong>.</p>
    <p>On est maintenant allé encore plus loin. Avec password_hash, PHP va lui-même crypter les lui-même:<br>
    <a href="https://www.php.net/manual/fr/function.password-hash">password_hash</a><br>
    <a href="https://www.php.net/manual/fr/faq.passwords.php#faq.passwords.fasthash">hashage des mdp</a></p>


    <h2>MD5</h2>
    <p>À ne plus utiliser: trop rapide et donc peu sécurisé. Il a déjà été craqué.</p>
    <?php
    echo md5($_POST['aPassword']);
    ?>

    <h2>SHA-1 (128 bit)</h2>
    <p>sha1 est déjà une fonction en soi.</p>
    <?php
    echo sha1($_POST['aPassword']);
    ?>
    <p>c'était déjà un cryptage qui ne peut pas être inversé. Il donne une empreinte numérique.</p>
    <p>Pour aller un peu plus loin: <a href="https://fr.wikipedia.org/wiki/SHA-1">Wikipedia</a>. Le SHA-1 ayant été cassé par les chinois, il ne faut plus l'utiliser (je me répète, I know)</p>

<h2>SHA-2 (256 bit)</h2>
<p>On peut l'utiliser. on l'utilisera avec la fonction hash()</p>
<?php
?>

<h2>Recommandé: password_hash() et password_verify()</h2>
<p>On va utiliser ces fonctions pour la gestion de nos mots de passe, sans leut donner d'algorythme par défaut.</p>






</body>
</html>