<!-- Insertion de variable lors d'une insertion d'une entrée dans la BDD -->
<?php
// On se connecte à la BDD
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'alan38160');
}
catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
}

// On prépare la requête
$req = $bdd->prepare('INSERT INTO jeux_video (nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES (:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
// On execute la requete en ajoutant les variables qu'on veut ajouter
$req->execute(array(
            'nom' => $nom,
            'possesseur' => $possesseur,
            'console' => $console,
            'prix' => $prix,
            'nbre_joueurs_max' => $nbre_joueurs_max,
            'commentaires' => $commentaires,
            ));

echo 'Le jeu a bien été enregistré !';



////////////////////////////////////////
// Modifier des données dans la BDD

// On prepare la requete
$req = $bdd->prepare('UPDATE jeux_video SET prix = :newPrix, nbre_joueurs_max = :new_nbre_joueurs_max WHERE nom = :nom_jeu');
// On insert les données voulu dans le tableau
$req->execute(array(
            'newPrix' => $newPrix,
            'new_nbre_joueurs_max' => $new_nbre_joueurs_max,
            'nom_jeu' => $nom_jeu,
            ));



////////////////////////////////////////
// Supprimer des données dans la BDD

// On prépare la requete
$req = $bdd->prepare('DELETE FROM jeux_video WHERE nom = :nom, prix = :prix');
// On supprime les données voulu dans le tableau en executant la requete
$req->execute(array(
            'non' => $nom,
            'prix' => $prix,
            ));

?>