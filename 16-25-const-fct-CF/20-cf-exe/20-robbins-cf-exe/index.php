
 
    <?php
    include "menu.php";
    require_once "configuration.php";
    
    if(isset($_GET['u'])){
    
        // utilisation du switch
        switch($_GET['u']){
            
        
            case 'formateurs':
                include "pages/formaweb.php";
                break;
            case 'stagiaires':
                include "pages/stagweb.php";
                break;
            case 'classes':
                    include "pages/classcf.php";
                    break;
            default:
                include_once "pages/homepage.php";
        }
    
    // sinonpas de $_GET['page'];    
    }else{
        // inclusion d'homepage une seule X
        include "pages/homepage.php";
    }
    include "footer.php";
    ?>
</body>
</html>