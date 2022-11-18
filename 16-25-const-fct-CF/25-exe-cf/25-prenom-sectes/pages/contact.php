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
<div class="dp-c">
    <div class="t-c">
      <h2>pour nous contactez</h2>
    </div>
    <div class="img-c"><img src="./img/contact.png" alt=""></div>
    <div class="p-c">
      <p>la y faut du text mais ni trop grand ni trop petit</p>
    </div>
    <div class="t-form">
      <table>
        <form action="/ma-page-de-contact" method="post">
          <tr>
            <td><label for="name">Nom :</label></td>
            <td><input type="text" id="name" name="user_name"></td>
          </tr>
          <tr>
            <td><label for="prenom">Prénom :</label></td>
            <td><input type="text" id="prenom" name="user_prenom"></td>
          </tr>
          <tr>
            <td><label for="ville">Ville :</label></td>
            <td><input type="text" id="prenom" name="user_prenom"></td>
          </tr>
          <tr>
            <td><label for="mail">e-mail :</label></td>
            <td><input type="email" id="mail" name="user_mail"></td>
          </tr>
          <tr>
            <td><label for="com">commentaires :</label></td>
            <td><textarea id="com" name="user_commentaires"></textarea></td>
          </tr>
          <tr>
            <td></td>
            <td class="bf-c"><input type="text" value="Envoyez"></td>
          </tr>
        </form>
      </table>
    </div>
</div>
    <?php
    include "footer.php";
    ?>
</body>
</html>