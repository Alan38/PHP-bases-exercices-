<?php
    $prenom = htmlspecialchars($_POST['prenom']);

    if (isset($_POST['submit'])) {
        if (!empty($prenom)) {
        }
        else {
            echo 'Il faut que vous rentriez une prénom. <a href="formulaire.php">Retourner au formulaire</a>';
        }
    }
    else {
        echo 'Une erreur est survenue, veuillez nous excuser et réessayer plus tard s\'il vous plait';
    }
?>

<p>Bonjour !</p>


<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $prenom; ?> !</p>


<p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>