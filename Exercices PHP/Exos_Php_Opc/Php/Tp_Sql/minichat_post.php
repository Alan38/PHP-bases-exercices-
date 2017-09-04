<?php

$pseudo = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['message']);
$submit = $_POST['submit'];

if (isset($submit)) {
    if (!empty($pseudo) && !empty($message)) {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'alan38160');
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $req = $bdd->prepare('INSERT INTO chat (pseudo, message) VALUES (:pseudo, :message)');
        $req->execute(array(
            'pseudo' => $pseudo,
            'message' => $message,
        ));
        $req->closeCursor();
        header('Location: minichat.php');
    }
    else {
        echo 'Ca n\'a pas marché';
    }
}
else {
    echo 'Une erreur est survenue, veuillez réessayer plus tard !';
}

?>