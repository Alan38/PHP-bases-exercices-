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

echo '<p>Tout ce qui s\'affiche en gras sont les      données récupérées dans la base de                données</p>
     <br>';

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <!-- Tout ce qui s'affichera en gras sera les données récupérées dans la base de données -->
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
// Si j'ai envie d'afficher que les noms de la base de données
$reponse = $bdd->query('SELECT nom FROM jeux_video');

echo '<br><br><br><br><p>Tout ce qui s\'affiche en gras sont les données récupérées dans la base de données</p>';
while ($donnees = $reponse->fetch()) {
    echo '<strong>' . $donnees['nom'] . '</strong><br />';
}

$reponse->closeCursor();


//////////////////////////////////////////////////
// Si j'ai envie d'afficher uniquement les jeux vidéos appartenant a 'Patrick'
$reponse = $bdd->query('SELECT nom, possesseur FROM jeux_video WHERE possesseur=\'Patrick\'');

echo '<br><br><br><p>La liste des jeux qui appartiennent uniquement a Patrick</p>';

while ($donnees = $reponse->fetch()) {
    echo '<strong>' . $donnees['nom'] . '</strong> appartient à <strong>' . $donnees['possesseur'] . '</strong><br>';
}

$reponse->closeCursor();


//////////////////////////////////////////////////
// Si j'ai envie d'afficher les jeux de Michel mais uniquement ceux à moins de 20€
$reponse = $bdd->query('SELECT nom, possesseur, prix FROM jeux_video WHERE possesseur=\'Michel\' AND prix < 20'); // Il existe aussi le mot-clé 'OR' qui signifie 'ou'

echo '<br><br><br><p>La liste des jeux de Patrick qui sont a moins de 20€</p>';

while ($donnees = $reponse->fetch()) {
    echo '<strong>' . $donnees['nom'] . '</strong> appartient à <strong>' . $donnees['possesseur'] . '</strong> et coûte <strong>' . $donnees['prix'] . '</strong><br>';
}

$reponse->closeCursor();



////////////////////////////////////////////////
// Si j'ai envie de classer les prix par ordre croissant
$reponse = $bdd->query('SELECT * FROM jeux_video ORDER BY prix'); // Si je veux classer par ordre décroisssant, j'ai juste a rajouter 'DESC' après 'prix'

echo '<br><br><br><p>La liste de tout les jeux ordnonnés par prix croissant</p>';

while ($donnees = $reponse->fetch()) {
    echo '<strong>' . $donnees['nom'] . '</strong> coûte <strong>' . $donnees['prix'] . '</strong>€<br>';
}

$reponse->closeCursor();
// A noter que si j'aurais fait un 'ORDER BY' sur un champs contenant du texte, ça l'aurai classé par ordre alphabétique



//////////////////////////////////////////////
// Affiche les 10 premiers résultats de la table jeux-video

$reponse = $bdd->query('SELECT nom FROM jeux_video LIMIT 0, 10');

echo '<br><br><br><p>Affiche les 10 premiers résultats de la table jeux_video</p>';

while ($donnees = $reponse->fetch()) {
    echo '<strong>' . $donnees['nom'] . '</strong><br>';
}

$reponse->closeCursor();



/////////////////////////////////////
// Combiner toutes les requetes SQL apprises en même temps !
// Afficher tout les noms, possesseurs, console et prix de la table jeux_video seulement si la console est une xbox ou ps2, le résultat sera ordonné par prix décroissant avec une limite qui affiche du 5eme au 15eme résultat.

$reponse = $bdd->query('SELECT nom, possesseur, console, prix FROM jeux_video WHERE console=\'Xbox\' OR console=\'PS2\' ORDER BY prix DESC LIMIT 5, 10');

echo '<br><br><br><p>Afficher tout les noms, possesseurs, console et prix de la table jeux_video seulement si la console est une xbox ou ps2, le résultat sera ordonné par prix décroissant avec une limite qui affiche du 5eme au 15eme résultat</p>';
    
while ($donnees = $reponse->fetch()) {
    echo '<strong>' . $donnees['nom'] . '</strong> appartient à <strong>' . $donnees['possesseur'] . '</strong>. Il est disponible sous <strong>' . $donnees['console'] . '</strong> et coûte <strong>' . $donnees['prix'] . '</strong>€<br>';
}

$reponse->closeCursor();


?>