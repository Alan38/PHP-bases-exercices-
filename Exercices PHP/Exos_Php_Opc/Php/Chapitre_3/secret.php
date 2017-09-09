<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Code d'accès de la NASA</title>
</head>
    
<body>
    
    <?php 

        $passwd = htmlspecialchars($_POST['mdp']);

        if (isset($passwd) && $passwd == 'kangourou') {

    ?>
        <p>Le code d'accès de la NASA est :</p>
        <p>GTD5-REF7-TGRE-5RD6-8J57-NASA</p>

    <?php
        }
        else {
    ?>
        <p>Vous n'avez pas rentré le bon mot de passe, vous ne pouez donc pas avoir accès au code de la NASA</p>
        <a href="form_secret.php">Retour au formulaire</a>
    <?php
        }
    ?>
    
</body>
    
</html>