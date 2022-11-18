<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes CF2m</title>
    <link rel="stylesheet" href="css/myCSS.css">
</head>
<body>
    <h1>Classes CF2m</h1>
        <?php
        include "menu.php";
        ?>
    <container>
        <h2>Liste des Classes du CF2m</h2>
        <?php
        foreach(CLASS_CF2M AS $class):
        ?>
        <ul>
            <li><?=$class?></li>
        </ul>
        <?php
        endforeach;
        ?>

    </container>
        <?php 
        include "footer.php" 
        ?>
</body>
</html>