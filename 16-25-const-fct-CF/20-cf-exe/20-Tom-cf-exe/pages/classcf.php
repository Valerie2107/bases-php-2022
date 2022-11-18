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
    <container>
        <h1>Classes du CF2m</h1>
        <?php
        foreach(CLASS_CF2M AS $item):
        ?>
        <ul>
            <li><?=$item?></li>
        </ul>
        <?php
        endforeach;
        ?>
    </container>
</body>
</html>