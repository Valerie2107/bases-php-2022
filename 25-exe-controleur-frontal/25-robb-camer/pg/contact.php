<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Réalisation d’un site statique</title>
    <link rel="stylesheet" href="css/style.css">
    
    
</head>
<body>
<?php include "menu.php"; ?>
<header>
        <img   src="images/douala.jpg" alt="douala" width=auto; >
            <h1 class="titre-de-page">Bienvenue au <strong>Cameroun</strong></h1>
        </header>
  
       
        <main class="container">
        <img class="image-armoirie" src="images/contact.webp" alt="Image de la geographie">
        <div class="contact">
            <form action="">
                <div class="form-control">
                    <input id="nom" type="text" placeholder="Votre nom">   
                </div>
                <div class="form-control">
                    <input id="email" type="email" placeholder="Votre emnail">   
                </div>
                <div class="form-control">
                    <input id="telephone" type="tel" placeholder="Votre telephone">   
                </div>
                <div class="form-control">
                    <textarea id="message" cols="30" rows="10">Votre message ici...</textarea>
                </div>
                <div class="form-control">
                    <input type="submit" value="Envoyez Le Message" class="btn">
                </div>
            </form>
        </div>

         
        <div class="reference">
            <p>Référence des sources sur <a href="https://fr.wikipedia.org/wiki/Cameroun">Wikipédia</a></p>
        </div>

    </main>
    <footer class="container">
            <p>&copy; 2022, tous droits réservés <strong>Cameroun</strong></p>
    </footer>
</body>
</html>