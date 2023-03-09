# Les sessions

Les sessions sont un moyen simple de stocker des données individuelles pour chaque utilisateur en utilisant un identifiant de session unique. Elles peuvent être utilisées pour faire persister des informations entre plusieurs pages.

Les identifiants de session sont normalement envoyés au navigateur via des cookies de session, et l'identifiant est utilisé pour récupérer les données existantes de la session. L'absence d'un identifiant ou d'un cookie de session indique à PHP de créer une nouvelle session, et génère ainsi un nouvel identifiant de session.

--- c'est du stockage éphémère, pas des cookies qui vont partager des infos publicitaires etc. donc pas soumis au RGPD.
Il n'est pas accessible par Js et évite donc ce type d'attaque---

### Les sessions suivent une procédure simple:

Lorsqu'une session est démarrée, PHP va soit récupérer une session existante en utilisant l'identifiant de session passé (habituellement depuis un cookie de session) ou si aucun identifiant de session n'est passé, il va créer une nouvelle session.

PHP va ainsi peupler la variable superglobale `$_SESSION` avec toutes les données de session une fois la session démarrée. Lorsque PHP s'arrête, il va prendre automatiquement le contenu de la variable superglobale `$_SESSION`, le linéariser (--comment il formate en une seule ligne--), et l'envoyer pour stockage au gestionnaire de sauvegarde de session sur le serveur.

Par défaut, PHP utilise en interne le gestionnaire de sauvegarde files qui est défini via la directive session.save_handler. Les données de session seront sauvegardées sur le serveur à l'endroit spécifié par la directive de configuration session.save_path.

Les sessions peuvent être démarrées manuellement en utilisant la fonction `session_start()` ---l'endroit où ça être sauvegardé sur le serveur---. Si la directive de configuration session.auto_start est définie à 1, une session démarrera automatiquement lors du début de la demande.

### Exemple 1

Un simple compteur de vues :
```php
    <?php
    # Lancement d'une session
    # Création d'un identifiant de session (phpsessid)
    # stocké dans un fichier texte sur le serveur
    # et d'un cookie sur la machine utilisateur
    # contenant le phpsessid
    session_start();

    # si la variable de session 'count' n'existe pas
    if (!isset($_SESSION['count'])) {

        # on le crée
        $_SESSION['count'] = 1;

    # sinon
    } else {

        # on l'incrémente
        $_SESSION['count']++;
    }

    # on l'affiche
    echo $_SESSION['count'];
```  
------editthiscookie permet de voir les cookies-------------

Note : Pourquoi `session_start()` doit-elle être placée au début du fichier ? Et bien parce que si PHP utilise les cookies pour repérer quel est l'id de session utilisé par l'internaute, il va écrire cet id de session dans un cookie. Or, le protocole HTTP fonctionne de telle sorte que les en-têtes (qui permettent de dire à votre navigateur "crée un cookie ayant tel nom et telle valeur") sont envoyés avant le premier caractère HTML transmis.

Cela veut dire que dès que vous transmettrez un caractère HTML, les en-têtes seront envoyés et vous ne pourrez plus les modifier, vous ne pourrez donc plus écrire le cookie de session.

En général, si vous faites une maladresse de ce style, vous vous retrouverez avec une erreur de `headers already sent`.

### Exemple 2

Une navigation entre 4 pages qui gardent les valeurs entre celles-ci (dossier exemple2) :
```php
<?php
# démarrage de session
session_start();

# stockage du PHPSESSID (id de session)
$_SESSION['idsession']=session_id();

$_SESSION['logs'][] = date("Y-m-d H:i:s")." | ".$_SERVER['REMOTE_ADDR']." | ".
$_SERVER['HTTP_USER_AGENT']." | ".$_SERVER['SCRIPT_NAME'];

?>
```
Avec une déconnexion et redirection sur `p1.php` depuis `disconnect.php`
```php
# suivi de session
session_start();

# destruction des variables de sessions (réinitialisation du tableau $_SESSION)
$_SESSION = [];

# suppression du cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

# Destruction du fichier lié sur le serveur
session_destroy();

# redirection sur p1.php
header("Location: p1.php");
```

### Exemple 3

Une connexion / déconnexion pour accéder à une administration :

Pour la page de connexion (dossier exemple2) `index.php` :
```php
# lancement de session
session_start();
# création d'un login de connexion pour accéder
# à l'administration du site
$login ="michael";
$pwd ="4lulu3";

# si on est déjà connecté
if(isset($_SESSION['monid'])&&$_SESSION['monid']==session_id()){

    # redirection sur l'admin
    header("Location: admin.php");
    exit();
}

# si on essaye de se connecter
if(isset($_POST['username'],$_POST['password'])){

    # si le login et mot de passe sont bons
    if($login==$_POST['username']&&$pwd==$_POST['password']){

        # création de la variable de session contenant le phpsessid
        $_SESSION['monid'] = session_id();
        # et d'autres variables si on le souhaite
        $_SESSION['monnom'] = $login;

        # redirection vers l'admin
        header("Location: admin.php");
        exit();

    # sinon création d'une erreur
    }else{
        $erreur = "Login et/ou mot de passe incorrecte";
    }
}
?>
```
Pour la page protégée `admin.php`

```php
# lancement de session
session_start();

# si on est pas/plus connecté
if(!isset($_SESSION['monid'])&&$_SESSION['monid']!=session_id()){

    # redirection sur l'accueil
    header("Location: ./");
    exit();
}

# si on veut de se déconnecter
if(isset($_GET['disconnect'])){

    # destruction des variables de sessions (réinitialisation du tableau $_SESSION)
    $_SESSION = [];

    # suppression du cookie
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    # Destruction du fichier lié sur le serveur
    session_destroy();

    # redirection sur l'accueil
    header("Location: ./");
}
```