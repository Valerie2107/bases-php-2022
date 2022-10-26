<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
    <h1>Include</h1>
    <p>La fonction include () va permettre d'importer n'importe quoi - en général un autre fichier PHP - aussi souvent qu'on le souhaite et sans erreur grave en cas d'échec.</p>
    <p>On va l'utiliser énormément. 
    <a href="https://www.php.net/manual/fr/function.include.php">info</a></p>

    - un include peut tout charger comme fichier, en règle générale ce sera un fichier PHP. Il sait lire le reste mais si jamais je mets du PHP dans un fichier HTML, il y a le risquequ'un hacker voit ma code. d'où faille de sécurité<br>
        si je veux mettre une image, mieux vaut la mettre dans un fichier PHP qui va la lire. Elle sera affichée à l'écran en bonne résolution mais se trouvera en réalité <br>

    <?php
    include "18-footer-1.php";     //pas obligatoire de mettre les parenthèses car include est tellement usité qu'il est devenu un mot réservé pour fonction. Il va donc chercher le footer de l'autre fichier.
    
    include "18-footer-1.php2";   //je fais volontairement une faute. Malgré celle-ci, le code va fonctionner pour la fonction précédente et le code ne s'arrête pas après l'erreur - PHP va également charger la fonction suivante.
    
    include "18-footer-1.php"; 
    ?>
<!--- différence entre include et require: si j'ai une erreur avec include, il affichera quand même le reste de la page. require si j'ai une erreur, il affichera juste une erreur car il considere que 'est une erreur grave'
 - include quand je veux mettre de morceaux de codes dans un fichier surtout s'ils peuvent être chargés/affichés plusieurs fois sur la page (genre un menu)<br>

        - require once quand c'est un fichier important qu'on ne peut pas toucher surtout s'il y a des constantes.<br>-->
</body>
</html>