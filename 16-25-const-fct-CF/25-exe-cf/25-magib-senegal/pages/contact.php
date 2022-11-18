<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Contact</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
  <div class="baniere">
    <img class="imge" src="img/senegal.jpg" alt="img">
    <div class="text">
      <h1>Voyage au Sénégal</h1>
    </div>
  </div>
  <?php
  include "menu.php";
  //var_dump($_POST,$GLOBALS);
  ?>
  <div class="cont">
    <h1 class="titre">Nous contacter</h1>
    <img src="img/contacts.jpg" alt="img">
    <form action="" method="post" name="monform">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input name="courriel" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Texte</label>
        <textarea name="lemessage" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</body>

</html>