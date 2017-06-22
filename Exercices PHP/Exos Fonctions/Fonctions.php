<?php

    function compare($nombre1, $nombre2)
    {
        if ($nombre1 > $nombre2)
        {
            echo 'Le nombre ' .$nombre1. ' est supérieur au nombre ' .$nombre2.'.';
        }
        
        elseif ($nombre1 < $nombre2)
        {
            echo 'Le nombre ' .$nombre2. ' est supérieur au nombre ' .$nombre1.'.';
        }
        
        else
        {
            echo 'Les deux nombres sont égaux.';
        }
    }

    compare(4, 8);
    echo '<br><br>';
    compare (12, 2);
    echo '<br><br>';
    compare(54, 54);




echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';




    function Salutations($prenom, $nom, $age)
    {
        if ($age <= '1')
        {
            echo 'Bonjour ' .$prenom. ' ' .$nom. ', tu as ' .$age. ' an.<br>';
        }
        
        else
        {
            echo 'Bonjour ' .$prenom. ' ' .$nom. ', tu as ' .$age. ' ans.<br>';
        }
    }

    Salutations('Alan', 'Lazzarotto', '1');
    Salutations('Alan', 'Lazzarotto', '24');



echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


    


    $tous = array('Alan', 'Marie', 'Mourad', 'Medhi', 'Bli', 'Bla', 'Caca', 'Pipi', 'Easy');
    /* $tous = 'Alan'; */
    /* $tous = NULL; */

    function salut_a_tous($tous)
    {
        if (is_string($tous))
        {
            echo 'Salut a toi ' .$tous. ' !<br>';
        }
        
        elseif (is_array($tous))
        {
            foreach ($tous as $element)
            {
                echo 'Salut a toi ' .$element. ' !<br>';
            }
        }
        
        elseif ($tous == NULL)
        {
            echo 'Salut l\'étranger !<br>';
        }
        
        else
        {
            echo 'Error';
        }
    }

    salut_a_tous($tous);
?>