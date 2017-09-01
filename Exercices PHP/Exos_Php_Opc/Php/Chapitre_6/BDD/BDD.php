<?php
try {
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'alan38160');
}
catch(Exception $e) {
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM jeux_video');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <!-- Tout ce qui s'affichera en gras sera les données récupérées dans la base de données -->
    <p>Tout ce qui s'affichera en gras sera les données récupérées dans la base de données</p>
    <br>
    <p>
    Jeu : <strong><?php echo $donnees['nom']; ?></strong><br />
    Le possesseur de ce jeu est : <strong><?php echo $donnees['possesseur']; ?></strong>, et il le vend à <strong><?php echo $donnees['prix']; ?></strong> euros !<br />
    Ce jeu fonctionne sur <strong><?php echo $donnees['console']; ?></strong> et on peut y jouer à <strong><?php echo $donnees['nbre_joueurs_max']; ?></strong> au maximum<br />
    <strong><?php echo $donnees['possesseur']; ?></strong> a laissé ces commentaires sur <strong><?php echo $donnees['nom']; ?></strong> : <strong><?php echo $donnees['commentaires']; ?></strong>
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête


//////////////////////////////////////////////////
// Si j'ai envie d'afficher que les noms
$reponse = $bdd->query('SELECT nom FROM jeux_video');

echo '<br><br><br><br><p>Tout ce qui s\'affiche en gras sont les données récupérées dans la base de données</p>';
while ($donnees = $reponse->fetch()) {
    echo '<strong>'.$donnees['nom'] . '</strong><br />';
}

$reponse->closeCursor();

?>