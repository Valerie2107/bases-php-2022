<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culture | Page Statique</title>
    <link rel="stylesheet" href="css/style.css">
     
</head>
<body>

<?php include "menu.php"; ?> 
<header>
        <img   src="images/douala.jpg" alt="douala" width=auto; >
            <h1 class="titre-de-page">Bienvenue au <strong>Cameroun</strong></h1>
        </header>

      
      <a class="previous" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
        
         
        <div class="galeries">
            <img src="images/foot.jpg" alt="foot">
            <img src="images/monument.jpg" alt="monument">
            <img src="images/10.png" alt="musse">
            <img src="images/Yaounde1.jpg" alt=" ">
            <img src="images/1.jpg" alt=" ">
            <img src="images/2.jpg" alt="">
        </div>

 

        <div class="reference">
            <p>Référence des sources sur <a href=" https://fr.wikipedia.org/wiki/Cameroun ">Wikipédia</a></p>
        </div>

    </main>
    <footer class="container">
            <p>&copy; 2022, tous droits réservés <strong>Cameroun</strong></p>
    </footer>
</body>
</html>