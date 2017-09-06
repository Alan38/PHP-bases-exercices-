<?php

// setcookie('pseudo', 'Alan', time() + 365*24*3600); Déclaration d'un cookie non sécurisé

// Déclaration d'un cookie sécurisé
setcookie('pseudo', 'Alan', time() + 365*24*3600, null, null, false, true); // On écrit un cookie
setcookie('pays', 'France', time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...

// Pour modifier un cookie, on réécrit le même code, seul la valeur du pseudo ou du pays changera et écrasera l'ancien, le temps sera lui aussi remit a zero

// Et SEULEMENT MAINTENANT, on peut commencer à écrire du code html

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma super page PHP</title>
    </head>

    <body>
        <a href="recup_cookie.php">Tester l'enregistrement des cookies</a>
    </body>
</html>