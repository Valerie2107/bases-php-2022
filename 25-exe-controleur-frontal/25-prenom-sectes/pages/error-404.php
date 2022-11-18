<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Secte - <?=$title?></title>
</head>
<body>
<?php
    include "nav-bar.php";
    ?>
    <?php
    include "main.php";
    ?>
<section class="error">
    <div class="error-text">
      <h1>404</h1>
      <h2>PAGE MOMENTANEMENT INJOIGNABLE</h2>
      <h3>On Réessaye ?</h3>
      <a href="#" class="yes">OUI</a>
      <a href="https://youtu.be/aG0-NM2NhUw">NON</a>
    </div>
  </section>
  <?php
    include "footer.php";
    ?>
</body>
</html>