# Choix de mysqli 

Nous faisons le choix de mysqli procédural pour nos connexions.

Il existe une version mysqli OO (orienté objet) et une autre procédurale.

Nous passerons à l'OO plus tard, et de préférence avec PDO :

https://www.php.net/manual/fr/mysqlinfo.api.choosing.php

Car :

### PDO :

Interface orientée objet -> Oui
Interface procédurale->Non

### mysqli :

Interface orientée objet -> Oui
Interface procédurale-> **Oui**

## Création d'un .gitignore

On crée un .gitignore pour ne pas envoyer notre fichier config.php sur github pour des questions de sécurité. 

config.php.create en est une copie sans les vrais paramètres de connexion !



<p>on sait que c'est un fichier qui va manquer et que le suivant devra recréer.
    le .gitignore a été créé pour éviter que le vrai fichier config.php (avec nos identifiants etc) ne soit envoyé sur git et accessible sans notre accord
</p>