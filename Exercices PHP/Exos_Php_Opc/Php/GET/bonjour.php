<?php
    if(isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['repeter'])) {
        $_GET['repeter'] = (int) $_GET['repeter'];
        
        if ($_GET['repeter'] <= 100 && $_GET['repeter'] != 0) {
            for ($i = 0; $i <= $_GET['repeter']; $i++) {
                echo '<p>Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' et vous avez choisi de le répéter ' . $_GET['repeter'] . ' fois !</p>';
            }
        }
        elseif ($_GET['repeter'] == 0) {
            echo '<p>Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'];
        }
        else {
            echo '<p>Il faut renseigner un nom et un prénom ou un chiffre inférieur a 100 pour accéder a cette page</p>';
        }
    }
?>
