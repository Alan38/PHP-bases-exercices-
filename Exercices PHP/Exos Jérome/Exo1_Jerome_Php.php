<?php

    echo 
    '<form action="Exo1_Jerome_Php.php" method="POST">
    
    <p>Heures : 
    <input type="number" min="0" max="23" name="heures" value="" required>
    </p>
    
    <p>Minutes :
    <input type="number" min="0" max="59" name="minutes" value="" required>
    </p>
    
    <input type="submit" name="submit" value="Auké">
    
    </form>';

    $heure = $_POST['heures'];
    $minute = $_POST['minutes'];

    if (isset($_POST['submit'])) {
        
        if ($heure == 23 && $minute == 59) {
            
            $heure = 0;
            $minute = 0;
            echo 'Dans une minute, il sera minuit ! <strong>(Je sais que t\'as voulu casser mon code mais c\'est raté)</strong> :-)';
        }
        
        elseif ($heure < 23 && $minute == 59) {
            
            $heure = $heure + 1;
            echo 'Dans une minute, il sera ' .$heure. 'h !';
        }
        
        elseif ($heure < 24 && $minute == 0) {
            
            $minute = $minute + 1;
            echo 'Dans une minute, il sera ' .$heure. 'h et ' .$minute. ' minute !';
        }
        
        else {
            
            $minute = $minute + 1;
            echo 'Dans une minute, il sera ' .$heure. 'h et ' .$minute. ' minutes !';
        }
    }
    
?>