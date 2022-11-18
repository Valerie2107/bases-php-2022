<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact</title>
</head>
<body>
    <?php 
    include "header.php"
    ?>
    <main>
        <h2>Contact</h2>
        <img id="cont" src="medias/contacts.jpg" alt="Contact">
        
        <form method="GET" action="" name="form1">
        
            <label class="txtform" for="nom">Nom : </label>
            <input class="txtform" type="text" name="nom" id="nom" placeholder="Entrez ici votre nom" required> <br>


            <label class="txtform" for="prenom">Prénom :</label>
            <input class="txtform" type="text" name="prenom" id="prenom" placeholder="Entrez ici votre prénom" required> <br>


            <label class="txtform" for="ville">Ville :</label>
            <input class="txtform" type="text" name="prenom" id="prenom" placeholder="Entrez ici votre prénom" required> <br>

            
            <label class="txtform" for="mail">Email :</label>
            <input class="txtform" type="email" name="email" id="courriel" placeholder="Entrez ici votre mail" required> <br>

            <label class="txtform" for="message">Message : </label>

            <textarea name="text" placeholder="Entrez ici votre message" required></textarea> <br>
            
            <input id="send" class="txtform" type="submit" value="Envoyer">
        </form>
        </div>
    </main>
    <a href="#"><img id="fleche" src="medias/arrow.png" alt="fleche pour remonter vers le haut de la page"></a>
</body>
</html>