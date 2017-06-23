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


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';



    $table = array(
        '1x9' => '9',
        '2x9' => '18', 
        '3x9' => '27', 
        '4x9' => '36', 
        '5x9' => '45', 
        '6x9' => '54', 
        '7x9' => '63', 
        '8x9' => '72', 
        '9x9' => '81', 
        '10x9' => '90');
    function liste_deroulante($table, $name)
    {
        foreach ($table as $multi => $result)
        {
            echo '<select name="' .$name. '">
                 <option></option>
                 <option value="' .$multi. '">'.$result.'</option>
                 </select>';
        }
    }

    liste_deroulante($table, 'table_multiplication9');


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


    $tableau_entiers = array(4, 5, 19, 4, 0, -1, 8);
    function contains($tableau_entiers, $entier, $strict = false)
    {
        if (in_array($entier, $tableau_entiers, true))
        {
            echo 'true';  
        }
        
        else
        {
            echo 'false';
        }
    }
        
    contains($tableau_entiers, 'Quatre');




echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';



    $tableau_entiers = array(5, 8, 3, 5, 9);
    /* $tableau_entiers = array(5, 5, 5, 5); */
    /* $tableau_entiers = array(2); */
    /* $tableau_entiers = array(-9, -7, -2, -4); */
    function maximum($tableau_entiers)
    {
        $max = max($tableau_entiers);
        echo 'Le plus grand nombre dans ce tableau est ' .$max;
    }

    maximum($tableau_entiers);
?>