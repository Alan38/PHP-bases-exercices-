<?php

    echo 
    '<form action="Exo4_Jerome_Php.php" method="POST">
    
    <p>Candidat 1 (en %) : 
    <input type="number" min="0" max="100" step="0.01" name="C1" value="" required>
    </p>
    
    <p>Candidat 2 (en %) :
    <input type="number" min="0" max="100" step="0.01" name="C2" value="" required>
    </p>
    
    <p>Candidat 3 (en %) :
    <input type="number" min="0" max="100" step="0.01" name="C3" value="" required>
    </p>
    
    <p>Candidat 4 (en %) :
    <input type="number" min="0" max="100" step="0.01" name="C4" value="" required>
    </p>
    
    <input type="submit" name="submit" value="Auké">
    
    </form>';


    $C1 = $_POST['C1'];
    $C2 = $_POST['C2'];
    $C3 = $_POST['C3'];
    $C4 = $_POST['C4'];

    if (isset($_POST['submit'])) {
        
        if($C1 + $C2 + $C3 + $C4 != 100) {
            echo 'Vos entrées ne sont <strong>pas valides</strong> ! La somme des voix doit être <strong>égale a 100</strong>';
        }
        
        elseif ($C1 > 50) {
            echo 'Le candidat n°1 <strong>est élu</strong> avec ' .$C1. '% des voix !';
        }
        
        elseif ($C1 < 12.5) {
            echo 'Le candidat n°1 est éliminé !';
        }
        
        elseif ($C1 == $C2 || $C1 == $C3 || $C1 == $C4) {
            echo 'Le candidat n°1 est à égalité avec un des autres !';
        }
            
        elseif ($C1 >= 12.5) { 
            
            if($C1 > $C2 && $C1 > $C3 && $C1 > $C4) {
                echo 'Le candidat n°1 est arrivé en tête et est en ballotage <strong>favorable</strong> à la participation du second tour !';
            }
            
            elseif ($C1 < $C2 || $C1 < $C3 || $C1 < $C4) {
                echo 'Le candidat n°1 est en ballotage <strong>défavorable</strong> mais il participe au second tour !';
            }
        }
    }
?>