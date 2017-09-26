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