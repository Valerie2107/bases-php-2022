<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>American English</title>
</head>
<body>
<?php include "pg/header.php";?>

<?php include "pg/menu.php"; ?>
    <br>
    <main>
    <div class="center">
    <h1>Contact Us </h1>
    <form action="">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br>
  <label for="lname">Your Message:</label><br>
  <input type="text" id="lname" name="lname" value="Your Message"><br><br>
  <input type="submit" value="Submit">
</form> 
</div>
</main>
<?php include "pg/footer.php"; ?>
</body>
</html>

