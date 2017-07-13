<?php

    echo 
    '<form action="Exo2_Jerome_Php.php" method="POST">
    
    <p>Combien voulez-vous de photocopies ? : 
    <input type="number" min="1" name="photo" value="" required>
    </p>
    
    <input type="submit" name="submit" value="Auké">
    
    </form>';

    $Nbr_Photo = $_POST['photo'];
    $Dix_Photo = 10 * 0.10;
    $Vingt_Photo = 20 * 0.09;

    if (isset($_POST['submit'])) {
        
        if ($Nbr_Photo <= 10) {
            $facture = $Nbr_Photo * 0.10;
            echo 'Le prix pour ' .$Nbr_Photo. ' photocopies est de ' .$facture. '€';
        }

        elseif ($Nbr_Photo > 10 && $Nbr_Photo <= 30) {
            $facture = $Dix_Photo + ($Nbr_Photo - 10) * 0.09;
            echo 'Le prix pour ' .$Nbr_Photo. ' photocopies est de ' .$facture. '€';
        }

        else {
            $facture = $Dix_Photo + $Vingt_Photo + ($Nbr_Photo - 30) * 0.08;
            echo 'Le prix pour ' .$Nbr_Photo. ' photocopies est de ' .$facture. '€';
        }
    }
?>