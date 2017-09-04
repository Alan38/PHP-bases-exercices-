<!DOCTYPE html>
<html>

<head>
    <title>Minichat - Socialisez vous !</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>

<body>
    <form action="minichat_post.php" method="post">
        <p>Pseudo :
            <input type="text" name="pseudo" placeholder="Votre Pseudo" max="30">
        </p>
        <p>Message :
            <textarea cols="40" rows="1" name="message"></textarea>
        </p>
        <input type="submit" name="submit" value="Envoyer">
    </form>
    <div>
        <?php
            try {
            $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'alan38160');
            }
            catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
            
            $req = $bdd->query('SELECT pseudo, message FROM chat');
            
            while ($donnees = $req->fetch()) {
                echo '<p><strong>' . $donnees['pseudo'] . '</strong>: ' . $donnees['message'] . '</p>'; 
            }
        
            $req->closeCursor();
        ?>
    </div>
</body>
    
</html>