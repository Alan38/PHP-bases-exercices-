<?php
// On se connecte à la BDD
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'alan38160');
}
catch(Exception $e) {
    die('Erreur : ' .$e->getMessage());
}
// On prepare la requete en lui donnant toutes les infos sauf 'possesseur' et 'prix' qui sont des parametres controlés par l'utilisateur
$req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = ? AND prix <= ? ORDER BY prix');
// On execute la requete en envoyant les parametres fourni par l'utilisateur (dans l'ordre)
$req->execute(array(
        $_GET['possesseur'], 
        $_GET['prix_max'],
        ));

// On affiche le tout sous la forme d'une liste
echo '<ul>';
while ($donnees = $req->fetch()) {
    echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . '€)</li>';
}
echo '</ul>';

// On finit la requete
$req->closeCursor();

?>