<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'alan38160');
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Mon Blog !</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
    <section>
        <h1>Mon super blog !</h1>
        <p><center>Les derniers billets :</center></p>
        
        <?php
            $req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS dateFR FROM billets ORDER BY date_creation DESC LIMIT 0, 5');
                
            
            while($donnees = $req->fetch()) {
        ?>
            <article class="news">
                <h3>
                    <?php echo htmlspecialchars($donnees['titre']) . ' ! Le ' . $donnees['dateFR']; ?>
                </h3>
                
                <p><?php echo nl2br(htmlspecialchars($donnees['contenu'])); ?><br>
                <a href="commentaire.php?page=<?php echo $donnees['id']; ?>">Commentaires</a></p>
            </article>
        <?php
            }
            $req->closeCursor();
        ?>
        
    </section>
    
</body>
    
</html>