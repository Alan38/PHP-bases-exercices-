<?php

    echo 
    '<form action="Exo5_Jerome_Php.php" method="POST">
    
    <p>Jour (ex : 01) : 
    <input type="text" name="jour" value="" required>
    </p>
    
    <p>Mois (ex : 05) :
    <input type="text" name="mois" value="" required>
    </p>
    
    <p>Année (ex : 2017) :
    <input type="text" name="année" value="" required>
    </p>
    
    <input type="submit" name="submit" value="Auké">
    
    </form>';

    $Jour = $_POST['jour'];
    $Mois = $_POST['mois'];
    $Année = $_POST['année'];

    if (isset($_POST['submit'])) {
        
        if (strlen($Jour) == 2 && $Jour <= 31 && strlen($Mois) == 2 && $Mois <= 12 && strlen($Année) == 4) {

                if (is_int($Année / 400) && $Jour == 29 && $Mois == 02) {
                    echo 'La date ' .$Jour. '/' .$Mois. '/' .$Année. ' est correcte et c\'est une année bissextile.';
                }
                
                elseif (is_int($Année / 100) && $Jour == 29 && $Mois == 02) {
                    echo 'Il n\'y a que 28 jours dans le mois de fevrier sauf dans le cas d\'une année bissextile.';
                }
                
                elseif (is_int($Année / 4) && $Jour <= 29 && $Mois == 02) {
                    echo 'La date ' .$Jour. '/' .$Mois. '/' .$Année. ' est correcte et c\'est une année bissextile.';
                }

                elseif (is_float($Année / 4) && $Jour > 28 && $Mois == 02) {
                    echo 'Il n\'y a que 28 jours dans le mois de fevrier sauf dans le cas d\'une année bissextile.';
                }

                else {
                    echo 'La date ' .$Jour. '/' .$Mois. '/' .$Année. ' est correcte.';
                }
        }
        
        else {
            echo 'La date que vous avez entrée n\'est pas valide, veuillez remplir le formulaire avec un format de date valide (ex:05/04/2015)';
        }
    }
?>