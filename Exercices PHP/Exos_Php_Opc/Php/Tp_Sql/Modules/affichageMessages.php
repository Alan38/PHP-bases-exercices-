<?php
    // on calcule le numéro du premier message qu'on prend pour le limit de MySql
    $premierMessage = ($page - 1) * $messagesParPage;
        
    // on fait la requete
    $req = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS dateFr FROM chat ORDER BY id DESC LIMIT ' . $premierMessage . ', ' . $messagesParPage);
            
    // On affiche les messages
    while ($donnees = $req->fetch()) {
        echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> a posté le <strong>' . $donnees['dateFr'] . '</strong>:<br> ' . htmlspecialchars($donnees['message']) . '</p>'; 
    }
        
    // On ferme la requet Sql
    $req->closeCursor();
?>