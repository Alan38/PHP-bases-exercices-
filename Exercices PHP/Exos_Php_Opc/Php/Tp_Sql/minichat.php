<?php include('Modules/connexionBdd.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Minichat - Socialisez vous !</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="Modules/minichat_post.php" method="post">
        <p class="pseudo">
            <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" max="30" value="<?php echo $_COOKIE['pseudoCookie'];?>">
        </p>
        <p class="message">
            <label for="message">Message</label> : <textarea cols="40" rows="1" name="message"></textarea>
        </p>
        <input class="inputSubmit" type="submit" name="submit" value="Envoyer">
        <input class="inputRefresh" type="submit" name="refresh" value="Raffraichir le chat">
        <input class="inputSupp" type="submit" name="supp" value="Vider le Chat !">
    </form>
    <div class="page">
        
        <?php include('Modules/paginationChat.php'); ?>
        
    </div>
    <div class="bddUsers">
        
        <?php include('Modules/affichageMessages.php'); ?>
        
    </div>
    <div class="totalMessage">
        
        <?php include('Modules/totalMessages.php'); ?>
        
    </div>
</body>
    
</html>