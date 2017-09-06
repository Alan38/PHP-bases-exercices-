<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'alan38160');
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Minichat - Socialisez vous !</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="minichat_post.php" method="post">
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
        <?php
            echo '<br>';
            // on définit le nb de message qu'on veut par page
            $messagesParPage = 10;
        
            // On recupere le nb de messages
            $requeteNbMessage = $bdd->query('SELECT COUNT(*) AS nbMessages FROM chat');
            $nbMessage = $requeteNbMessage->fetch();
            $totalMessages = $nbMessage['nbMessages'];
        
            // On clalcule le nb de pages a créer
            $nbPages = ceil($totalMessages / $messagesParPage);
        
            // Puis on fait une boucle pour afficher les pages
            echo 'Page : ';
            for($i = 1; $i <= $nbPages; $i++) {
                echo '<a href="minichat.php?page=' . $i . '">' . $i . '</a>';
            }
        
            // Si le parametre GET existe
            if (isset($_GET['page'])) {
                $page = $_GET['page']; // On récupère le numéro de la page indiqué
            }
            else {
                $page = 1; // par défaut on se met sur la page 1
            }
        
            if ($nbPages > 5) {
                $req = $bdd->prepare('DELETE FROM chat LIMIT 50, 10');
                $req->execute();
                $req->closeCursor();
            }
        ?>
    </div>
    <div class="bddUsers">
        <?php
            // on calcule le numéro du premier message qu'on prend pour le limit de MySql
            $premierMessage = ($page - 1) * $messagesParPage;
        
            // on fait la requete
            $req = $bdd->query('SELECT pseudo, message FROM chat ORDER BY id DESC LIMIT ' . $premierMessage . ', ' . $messagesParPage);
            
            // On affiche les messages
            while ($donnees = $req->fetch()) {
                echo '<p><strong><span class ="bddPseudo">' . htmlspecialchars($donnees['pseudo']) . '</span></strong>: <span class="bddMessage">' . htmlspecialchars($donnees['message']) . '</span></p>'; 
            }
        
            // On ferme la requet Sql
        ?>
    </div>
    <div class="totalMessage">
        <?php
            echo '<br>';
            echo '<p>' . $totalMessages . ' messages ont étés postés au total.</p>';
        
            $req->closeCursor();
        ?>
    </div>
</body>
    
</html>