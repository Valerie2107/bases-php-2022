<?php
// affichage de la variable GET 
//var_dump($_GET);

// si il existe une variable get nommée p
if(isset($_GET['p'])){
    // on va vérifier la valeur de p avec un switch
    switch($_GET['p']){
            case "foot":
                include "pages/foot.php";
                break;
                case "barca":
                    include "pages/barca.php";
                    break;
                    case "real":
                        include "pages/real.php";
                        break;
                        case "messi":
                            include "pages/messi.php";
                            break;
                            case "ldc":
                                include "pages/ldc.php";
                                break;
                                case "regles":
                                    include "pages/regles.php";
                                    break;
                                    case "coupe":
                                        include "pages/coupe.php";
                                        break;
                        default:
                        include "pages/homepage.php";
                               
    }

// sinon    
}else{
    include "pages/homepage.php";
}