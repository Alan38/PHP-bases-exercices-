<?php

    $compte1_5 = 1;

    for ($compte1_5; $compte1_5 <= 5; $compte1_5++)
    {
        echo 'Coucou<br>';
    }

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


    $compte0_4 = 0;

    while ($compte0_4 <= 4)
    {
        echo $compte0_4.'<br>';
        $compte0_4++;
    }


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';




    for ($compte = 17; $compte >= 12; $compte--)
    {
        echo $compte.'<br>';
    }


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

    


    $decompte10_4 = 12;
    while ($decompte10_4 > 4)
    {
        echo $decompte10_4 -= 2;
        echo '<br>';
    }

    
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';




    $somme = 0;
    $compteur = 0;
    $premier15 = 0;
    for ($premier15; $premier15 <= 15; ++$premier15)
    {
        if ($compteur % 2 != 0)
        {
            $somme = $somme + $compteur;
        }
        $compteur++;
    }
    
    echo $somme;


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
    


    $somme = 0;
    $multi = 25;
    $entier = 1;
    for ($entier; $entier <= 10; ++$entier)
    {
        echo $entier * $multi.'<br>';
        $multi --;
    }


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';



    $liste = array(
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

    foreach ($liste as $table_multi => $result)
    {
        echo $table_multi. ' = ' .$result. '<br>';
    }

?>