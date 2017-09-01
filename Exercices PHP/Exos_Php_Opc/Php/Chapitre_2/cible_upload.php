<?php
    // On test sir le fichier a bien été envoyé et si il n'y a pas d'erreur
    if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0) {
        
        // On test si le fichier n'est pas trop gros
        if ($_FILES['fichier']['size'] <= 1000000) {
            
            // On test si l'extension est autorisees
            $infosfichier = pathinfo($_FILES['fichier']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees)) {
                
                // On valide le fichier et on le stocke définitivement
                move_uploaded_file($_FILES['fichier']['tmp_name'], 'uploads/' . basename($_FILES['fichier']['name']));
                echo 'L\'envoie a bien été efféctué !';
            }
        }
    }
?>