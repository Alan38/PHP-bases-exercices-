<?php

    echo 
    '<form action="Exo3_Jerome_Php.php" method="POST">
    
        <p>
            <input type="radio" name="sexe" value="Homme">Homme
        </p>
        <p>
            <input type="radio" name="sexe" value="Femme">Femme
        </p>

        <p>Age :
            <input type="number" min="1" max="99" name="age" value="" required>
        </p>

        <input type="submit" name="submit" value="Auké">
    
    </form>';

    $sexe = $_POST['sexe'];
    $age = $_POST['age'];

    if (isset($_POST['submit'])) {
        
        if (!empty($sexe) && !empty($age)) {
            
            if ($sexe == 'Homme' && $age > 20) {
                echo 'Vous êtes <strong>imposable</strong>';
            }
            
            elseif ($sexe == 'Homme' && $age <= 20) {
                echo 'Vous n\'êtes <strong>pas imposable</strong>';
            }
            
            elseif ($sexe == 'Femme' && $age >= 18 && $age <= 35) {
                echo 'Vous êtes <strong>imposable</strong>';
            }
            
            else {
                echo 'Vous n\'êtes <strong>pas imposable</strong>';
            }
        
        }
        
        else {
            echo 'Il y a une erreur, veuillez <strong>remplir les champs</strong> correctement <strong>s\'il vous plait</strong>';
        }
    }
?>