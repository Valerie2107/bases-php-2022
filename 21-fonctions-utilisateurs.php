<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fonctions utilisateurs</title>
</head>
<body>
    <h1>Les fonctions utilisateurs</h1>
    <p>En PHP, on peut créer une nouvelle fonction en utilisant le mot-clef "function" suivit d'un nom (utilisation du même nommage que les variables sans le $) et de parenthèses qui peuvent contenir des arguments/paramètres, et le contenu de la fonctions entre accolades { }.</p>

        <pre><code>
        
        function creeDesTensionsDansLeGroupe(){   
                    return date("Y-m-d H:i:s");   
                }   

        </code></pre>
        
        <?php
                function creeDesTensionsDansLeGroupe(){   //fonction créée sans argument dans cet exemple
                    
                    return date("Y-m-d H:i:s");   //https://www.php.net/manual/fr/datetime.format.php 
                }   
            //ici on utilise le return - comme le plus souvent - car on ne désire pas forcément afficher le résultat mais on veut STOCKER la valeur pour éventuellement la stocker

            echo creeDesTensionsDansLeGroupe();
            ?>

    
                <h2>Les fonctions avec arguments</h2>
                    <p>Les paramètres ou arguments sont obligatoires si déclarés et sans valeur par défaut.</p>


                    <pre><code>
                        function calculBasic($num1, $num2, $op = "+"){    <!--op signifie opération -->

                        }
                    </code></pre>

                    <?php
                     function calculBasic($num1, $num2, $op = "+"){
                        switch ($op){
                            case "*": //multiplication
                                return $num1*$num2;  //le return arrête la fonction et renvoie le résultat  --> rare que l'on mette un return dans un switch
                                break;     // ici le break est facultatif: certes il arrête la fonction, mais le return le faisait déjà à la ligne précédente --> on est dans un cas particulier
                            case "-":
                                return $num1-$num2;
                                break;
                            case "/": 
                                return $num1/$num2;
                                break;
                            default: 
                                return $num1+$num2;
                            }
                    }

                    echo calculBasic(7,5);
                    echo "<br>";

                    echo calculBasic(25,83, "-");
                    echo "<br>";

                    echo calculBasic(7,5, "*");
                    echo "<br>";

                    echo calculBasic(7,5,"/");
                    echo "<br>";

                    echo calculBasic(7,5, "connerie");
                    echo "<br>";
        ?>

                    <p>autre manière en utilisant un if</p>
        <?php
        //très souvent quand on inverse (avec !) un &&, il devient un ||  -  et vice-versa
                     function calculBasicBis($num1, $num2, $op = "+"){
                        if (!is_numeric($num1) || !is_numeric($num2)){
                            return "attention, les 2 premiers paramètres doivent être numériques";
                        }
                        switch ($op){
                            case "*": //multiplication
                                return $num1*$num2;  //le return arrête la fonction et renvoie le résultat
                                break;     // ici le break est facultatif
                            case "-":
                                return $num1-$num2;
                                break;
                            case "/": 
                                return $num1/$num2;
                                break;
                            default: 
                                return $num1+$num2;
                            }
                    }

                    echo calculBasicBis(7,5);
                    echo "<br>";



        ?>

            
</body>
</html>