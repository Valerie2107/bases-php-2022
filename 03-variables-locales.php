<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables locales</title>
</head>
<body>
    <h1>Variables locales</h1>
    <p>En PHP, les variables sont représentées par un signe dollar "$" suivi du nom de la variable. Le nom est sensible à la casse.</br>
    Les noms de variables suivent les mêmes règles de nommage que les autres entités PHP. Un nom de variable valide doit commencer par une lettre ou un underscore (_), suivi de lettres, chiffres ou soulignés. Exprimé sous la forme d'une expression régulière, cela donne : ^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$ </p>
    <p>On va éviter les caractères spéciaux même si certains sont valides. Il faut absolument éviter les signes servant au calcul (car un ordiateur est à la base une calculatrice extreme)</p>
    <h2>Utilités des variables</h2>
    <p>Elles servent entre autre à stocker des informations (comme en JS)</p>
    <p>Elles peuvent être manipulées, affichées, sauvegardées, détruites etc...</p>
    <p>ATTENTION qu'en PHP à la fin d'une page PAR DEFAUT tout est détruit (ramasse-miettes). D'où l'importance de stocker des données.</p>
    <h4>Mettez les variables valides (même déconseillées) dans les balises PHP</h4>
    <pre>
        $lulu = 5;
        $lala = "yes";
        $5main = 3;
        
    </pre>
</body>
</html>