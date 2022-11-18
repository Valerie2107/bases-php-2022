<?php
//débogage de la variable superglobale POST
// var_dump($_POST);

// on vérifie toujours l'existance (initialisation not null) d'une variable avec isset suivi d'un && si on veut vérifier son type ou sa valeur
if(isset($lala) && is_numeric($lala)){
    echo $lala;
}

// si il existe la variable $_POST nommée temperature (utilisation de isset) - Dans notre cas? $_POST['temperature'] existe si on a envoyé le formulaire ET qu'elle contient effectivement du numérique !
if(isset($_POST['temperature']) && is_numeric($_POST['temperature'])){
    
    // on va créer une variable temporaire locale, et changer le typage de notre variable en entier en utilisant (int) pour integer, si ça fonctionne ça nous donne un numérique, en cas d'échec ça nous donne le numérique 0
    $temp = (int) $_POST['temperature'];
    // autre methode permettant de converstir en int, en cas d'échec settype renvoie false, true en cas de réussite : c'est $_POST['temperature'] qui est transformée en int
    // $temp2 = settype($_POST['temperature'],"integer");

    // initialisation de notre variable de réponse (Pour la vue)
    $response = "<h3>";

    // si la température est plus petit ou égale à 0
    if($temp<=0){
        // concaténation avec .= // les {$temp}° permettent que la variable ne soit pas confondue avec une autre avariable $temp°
        $response .= "L'eau est à l'état solide à {$temp}°";
    }elseif($temp<100){
        $response .= "L'eau est à l'état liquide à {$temp}°";
    }else{
        $response .="L'eau est à l'état gazeux à {$temp}°";
    }

    $response .= "</h3>";
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Températures</title>
</head>
<body>
    <h1>Températures</h1>
    <form name="name1" method="POST" action="13-interface-utilisateur-if.php">
        <p>Bonjour, quel est la température dehors?</p>
        <input type="number" min="-100" max="200" name="temperature" placeholder="Mettez la température"><br>
        <input type="submit" value="Envoyer">
    </form>
    <?php
    // Si la variable $response existe et qu'elle n'est pas (!) vide (empty)
    if(isset($response)&& !empty($response)){
        echo "$response";
    }
    ?>
</body>
</html>