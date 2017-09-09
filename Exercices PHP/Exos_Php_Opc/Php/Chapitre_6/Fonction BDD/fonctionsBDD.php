<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'alan38160');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
// UTILISATION DES FONCTIONS SCALAIRE SQL //
// Une fonctions scalaire s'execute sur une seule entrée de la table MySQL ciblée //

// selectionne UNE entrée et la convertit en majuscule
$reponse = $bdd->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video');

while ($donnees = $reponse->fetch()) {
    echo '<strong>' . $donnees['nom_maj'] . '</strong><br />';
}
echo '<br>';
$reponse->closeCursor();

// D'autres fonctions sont aussi disponible a l'image de UPPER(parametre), comme LOWER(parametre) qui convertit le résultat en minuscule, LENGTH(parametre) qui compte le nombre de caractere d'une chaine ou encore ROUND(prix_de_base, nbre_de_chiffre_après_la_virgule) qui arrondi un nombre décimal //

// ---------------------------------------------//
// UTILISATION DES FONCTIONS D'AGREGAT SQL //
// Une fonction d'agregat s'execute sur toutes les entrées de la table MySQL //

// selectionne TOUT les prix et en fait une moyenne générale
$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video');

$donnees = $reponse->fetch();
echo '<strong>' . $donnees['prix_moyen'] . '</strong><br>';

echo '<br>';
$reponse->closeCursor();

// D'autres fonctions sont aussi disponible a l'image de AVG(parametre), comme SUM(parametre) qui permet d'additionner les valeurs, MAX(parametre) qui renvoie la valeur maximale, MIN(parametre) qui retourne la valeur minimale ou encore COUNT(parametre) qui compte le nombre total d'entrées dans la table //


//----------------------------------------------//
// DISTINCT //
// Imaginons que nous voulions affichier les différents possesseurs de jeux vidéo de toute la table ?

$reponse = $bdd->query('SELECT COUNT(DISTINCT possesseur) AS nbpossesseurs FROM jeux_video');
$donnees = $reponse->fetch();

echo '<strong>' . $donnees['nbpossesseurs'] . '</strong>';
echo '<br><br>';

$reponse->closeCursor();


//----------------------------------------------//
// GROUP BY et HAVING //
// A utiliser en même temps qu'une fonction d'agregat, sinon c'est inutile.
// Nous voulons grouper les prix moyens en fonction de la console utilisées, comment peut-on faire ?

$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console');
$donnees = $reponse->fetch();

while ($donnees = $reponse->fetch()) {
    echo '<strong>' . $donnees['prix_moyen'] . ' - <strong>' . $donnees['console'] . '</strong><br>';
}

echo '<br>';
$reponse->closeCursor();

// HAVING est un peu l'équivalent de WHERE, mais il agit sur les données une fois qu'elles ont été regroupées. C'est donc une façon de filtrer les données à la fin des opérations //

$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console HAVING prix_moyen <= 10');
$donnees = $reponse->fetch();

while ($donnees = $reponse->fetch()) {
    echo '<strong>' . $donnees['prix_moyen'] . '</strong> - <strong>' . $donnees['console'] . '</strong><br>';
}

echo '<br>';
$reponse->closeCursor();


// On peut d'ailleurs très bien combiner WHERE et HAVING //

$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen, console FROM jeux_video WHERE possesseur=\'Patrick\' GROUP BY console HAVING prix_moyen <= 10');
$donnees = $reponse->fetch();

while ($donnees = $reponse->fetch()) {
    echo '<strong>' . $donnees['prix_moyen'] . '</strong> - <strong>' . $donnees['console'] . '</strong><br>';
}

echo '<br>';
$reponse->closeCursor();
?>