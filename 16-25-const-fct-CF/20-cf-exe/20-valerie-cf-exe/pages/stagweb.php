<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stagiaires WEB</title>
    <link rel="stylesheet" href="css/myCSS.css">
</head>
<body>
   
    <?php include "menu.php";?>     
    <container>
        <h2>Liste Stagiaires WEB</h2>
        <?php
        foreach(STAGIAIRES_WEB AS $item):
        ?>
        <ul>
            <li><?=$item[0]?></li>
            <li><?=$item[1]?></li>
            
        </ul>
        <?php
        endforeach;
        ?>
    </container>
</body>
</html>