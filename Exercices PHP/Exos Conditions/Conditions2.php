<?php
    
    $tout_baigne = false;

    if ($tout_baigne == true)
    {
        echo 'Génial, continue !';
    }

    else
    {
        echo 'Alors travaille plus !';
    }

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
    
    // AUTRE MANIERE DE VERIFIER SI UNE CONDITION EST VRAIE OU FAUSSE
    $tout_baigne = false;

    echo $tout_baigne ? 'Génial, continue !' : 'Alors travaille plus !';

?>