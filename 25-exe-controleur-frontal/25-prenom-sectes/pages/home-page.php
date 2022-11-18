<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <title>Secte - <?=$title?></title>
</head>
<body>
    <?php
    include "nav-bar.php";
    ?>
    <?php
    include "main.php";
    ?>
<div class="card">
    <div class="card-img"><a href="https://fr.wikipedia.org/wiki/Secte"><img src="./img/krishna.png" alt=""
          class="img-un"></a></div>
    <div class="card-img"><a href="https://fr.wikipedia.org/wiki/Secte"><img src="./img/mormon.png" alt=""
          class="img-un"></a></div>
    <div class="card-img"><a href="https://fr.wikipedia.org/wiki/Secte"><img src="./img/scientologie.png" alt=""
          class="img-un"></a></div>
    <div class="card-img"><a href="https://fr.wikipedia.org/wiki/Secte"><img src="./img/t-soleil.png" alt=""
          class="img-un"></a></div>
  </div>
  <div class="duo">
    <div class="duo-un">
      <h1 class="h1-duo">histoire-religion</h1>
      <img class="img-duo" src="img/histoir-religion.png" alt="">
      <h2 class="h2-duo">résumé</h2>
      <p class="p-duo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, esse consectetur hic impedit
        nobis cum magni nihil aliquid ipsum similique saepe ipsa quia</p>
      <form action="https://fr.wikipedia.org/wiki/Secte">
        <button type="submit">Cliquez sur moi</button>
      </form>
    </div>
    <div class="duo-un">
      <h1 class="h1-duo">secte-religion</h1>
      <img class="img-duo" src="img/histoir-religion.png" alt="">
      <h2 class="h2-duo">résumé</h2>
      <p class="p-duo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, esse consectetur hic impedit
        nobis cum magni nihil aliquid ipsum similique saepe ipsa quia</p>
      <form action="https://fr.wikipedia.org/wiki/Secte">
        <button type="submit">Cliquez sur moi</button>
      </form>
    </div>
  </div>
</body>
<?php
    include "footer.php";
    ?>
</html>