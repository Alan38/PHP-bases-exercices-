<?php
// JOINTURE INTERNE ENTRE DEUX TABLES SQL AVEC 'INNER JOIN' //
// Romain Vipelli n'apparaîtra pas dans les résultats de la requête. La jointure interne force les données d'une table à avoir une correspondance dans l'autre

try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'alan38160');
}
catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}

// SELECTIONNE les noms des jeux_videos et les prenoms des proprietaires
// DANS la table proprietaires et jeux_video
// LA LIAISON entre les tables se fait entre les champs ID_proprietaire et ID
// QUAND la console = PC
// ORDONNE LES par prix
// NE PREND QUE les 10 premiers
$req = $bdd->query('SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
INNER JOIN jeux_video j
ON j.ID_proprietaire = p.ID
WHERE j.console = \'PC\'
ORDER BY prix
LIMIT 0, 10');

while ($donnees = $req->fetch()) {
    echo $donnees['nom_jeu'] . ' - ' . $donnees['prenom_proprietaire'] . '<br>';
}

$req->closeCursor();
echo '<br><br><br>';


// JOINTURE EXTERNE ENTRE DEUX TABLES SQL AVEC 'LEFT JOIN' ET 'RIGHT JOIN' //
// Vous aurez toutes les données de la table des propriétaires, même s'il n'y a pas de correspondance dans l'autre table des jeux vidéo ; donc Romain Vipelli, qui pourtant ne possède aucun jeu vidéo, apparaîtra.

// LEFT JOIN //

// SELECTIONNE les noms des jeux_videos et les prenoms des proprietaires
// DANS la table proprietaires et jeux_video
// LA LIAISON entre les tables se fait entre les champs ID_proprietaire et ID
$req = $bdd->query('SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
LEFT JOIN jeux_video j
ON j.ID_proprietaire = p.ID');

while ($donnees = $req->fetch()) {
    echo $donnees['nom_jeu'] . ' - ' . $donnees['prenom_proprietaire'] . '<br>';
}

$req->closeCursor();
echo '<br><br><br>';


// RIGHT JOIN //

// SELECTIONNE les noms des jeux_videos et les prenoms des proprietaires
// DANS la table proprietaires et jeux_video
// LA LIAISON entre les tables se fait entre les champs ID_proprietaire et ID
$req = $bdd->query('SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
RIGHT JOIN jeux_video j
ON j.ID_proprietaire = p.ID');

while ($donnees = $req->fetch()) {
    echo $donnees['nom_jeu'] . ' - ' . $donnees['prenom_proprietaire'] . '<br>';
}

$req->closeCursor();
echo '<br><br><br>';

?>