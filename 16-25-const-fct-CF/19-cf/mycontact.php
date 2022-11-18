<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Contact du 19</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <?php
        include "menu.php";
        var_dump($_POST,$GLOBALS);
        ?>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <h1>Contact du 19</h1>
                <p class="lead">Notre page d'accueil</p>
                <form action="" method="post" name="monform">
                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input name="courriel" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea name="lemessage" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
        </div>
        <?php 
        include "footer.php" 
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
