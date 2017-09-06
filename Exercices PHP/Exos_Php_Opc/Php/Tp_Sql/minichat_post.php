<?php
// On se connecte a la BDD
try {
        $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'alan38160');
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

// On définit les variables du formulaire
$pseudo = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['message']);

if (isset($_POST['submit'])) {
    // Si le champ pseudo et message ne sont pas vides
    if (!empty($pseudo) && !empty($message)) {
        // On prepare la requete pour pouvoir inserer des données
        $req = $bdd->prepare('INSERT INTO chat (pseudo, message) VALUES (:pseudo, :message)');
        // On l'execute avec les données du formulaire
        $req->execute(array(
            'pseudo' => $pseudo,
            'message' => $message,
            ));
        // On ferme la requete
        $req->closeCursor();

        // On crée un cookie pour pré-remplir le champ 'pseudo' du formulaire
        setcookie('pseudoCookie', $pseudo, time() + 365*34*3600, null, null, false, true);
        // On redirige vers la page actuelle
        header('Location: minichat.php');
    }
    else { // Si les champs sont vides
        header('Location: minichat.php');
    }
}
elseif (isset($_POST['refresh'])) { // Si le bouton raffraichir est cliqué
    header('Location: minichat.php'); // on redirige vers la page actuelle
}
// Gestion de la suppression du MiniChat
elseif (isset($_POST['supp'])) {
?>
    <form action="minichat_post.php" method="post">
        <input type="password" name="pseudoA" placeholder="Pseudo Admin" required>
        <input type="password" name="mdpA" placeholder="Mot de passe Admin" required>
        <input type="submit" name="resetChat" value="Reset">
    </form>
<?php
}

$pseudoA = htmlspecialchars($_POST['pseudoA']);
$mdpA = htmlspecialchars($_POST['mdpA']);
    
if (isset($_POST['resetChat'])) {
        
    if (!empty($pseudoA) && $pseudoA === 'Alan38' && !empty($mdpA) && $mdpA === 'alan38160') {
        $req = $bdd->prepare('DELETE FROM chat');
        $req->execute();
        $req->closeCursor();
        echo '<center><p><strong>Le MiniChat a été vidé avec succès !</strong></p></center>';
        echo '<center><p>Vous allez être redirigé vers le chat dans quelques secondes seconde(s)</p></center>';
        header("refresh:5;url=minichat.php");
    }
    else {
        echo '<center><p><strong>Le pseudo ou le mot de passe est incorrect !</strong></p></center>';
        echo '<center><p>Vous allez être redirigé vers le chat dans quelques secondes seconde(s)</p><center>';
        header("refresh:5;url=minichat.php");
    }
}
?>