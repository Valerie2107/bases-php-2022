<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do while</title>
</head>
<body>
    <h1>do while</h1>
    <p>Boucle la moins utilisée, elle permet d'exécuter le code 1 fois même si la condition est à false, pour le reste elle fonctionne comme le while</p>
    <?php
    $i=0;
    while($i>0 && $i<10){
        echo "$i ";
        $i++;
    }
    $i=0;
    // le do while va afficher le 0 malgré que la condition ne soit pas remplie.
    do{
        echo "$i ";
    }while($i>0 && $i<=10);

    echo "<hr>";
    // ici le code est éxécuté 1 x, on affiche le 0, puis on met cette valeur à 1, elle rentre donc dans la condition et le while tourne jusqu'à 10
    $i=0;
    do{
        echo "$i ";
        $i++;
    }while($i>0 && $i<=10);
    ?>
</body>
</html>