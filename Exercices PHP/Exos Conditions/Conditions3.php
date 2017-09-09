<?php

    $prenom = 'Alan';
    $nom = 'Lazzarotto';

    switch (strlen($prenom && $nom))
    {
        case strlen($prenom) < strlen($nom):
            echo 'Ton nom est plus grand que ton prénom';
            break;
            
        case strlen($prenom) > strlen($nom):
            echo 'Ton prénom est plus grand que ton nom';
            break;
            
        case strlen($prenom) == strlen($nom):
            if ($prenom == $nom)
            {
                echo 'Ton nom et ton prénom sont complètement identiques ! C\'est très très rare !';
            }
            else
            {
                echo 'Ton nom et ton prénom sont de la même longueur !';
            }
            break;
    }


?>