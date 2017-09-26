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
    <title>Commentaires !</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
    <h1>Mon super Blog</h1>
    
    <section>
    
        <a href="blog.php">Retour à la liste des billets</a>
        
        <?php
            $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS dateFR FROM billets WHERE id = ?');
            $req->execute(array($_GET['page']));
            $donnees = $req->fetch();
        ?>
        <article class="news">
        
            <h3>
                <?php echo htmlspecialchars($donnees['titre']) . ' le ' . $donnees['dateFR']; ?>
            </h3>
            
            <p>
                <?php echo nl2br(htmlspecialchars($donnees['contenu'])); ?>
            </p>
        
            <?php
                $req->closeCursor();
            ?>
        </article>
        
        <article>
        
            <h2>Commentaires</h2>
            
            <?php
                $req = $bdd->prepare('SELECT id, id_billet, auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_comFR FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');
                $req->execute(array($_GET['page']));
                
                while ($donnees = $req->fetch()) {
                    echo '<p><strong>' . $donnees['auteur'] . '</strong> le ' . $donnees['date_comFR'] . '<br><br>' . $donnees['commentaire'] . '</p>';
                }
            
            $req->closeCursor();
            ?>
        
        </article>
        
    </section>
    
</body>
    
</html>