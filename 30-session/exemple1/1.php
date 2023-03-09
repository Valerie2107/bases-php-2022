<?php
    # Lancement d'une session
    # Création d'un identifiant de session (phpsessid)
    # stocké dans un fichier texte sur le serveur
    # et d'un cookie sur la machine utilisateur
    # contenant le phpsessid
    session_start();


    #pour caturer la date et heure d'arrivée
    if (!isset($_SESSION['arrive'])){
        $_SESSION['arrive'] = date("Y-m-d H:i:s");
    }    


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

    # visualisation de la variable de session: PHPSESSID
    var_dump($_SESSION);

    #affichage du PHPSESSID
    echo session_id();