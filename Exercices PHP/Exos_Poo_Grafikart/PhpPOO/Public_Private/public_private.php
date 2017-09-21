<?php

require 'Personnage.php';

$perso1 = new Personnage('Merlin'); 
$perso2 = new Personnage('Harry'); 

// On accède a la vie, l'atk, ou le nom en appelant la function qui se charge de retourner la valeur
echo 'Avant le combat :<br/><br/>';

echo 'Nom : ' . $perso1->getNom() .'<br/>';
echo 'Atk : ' . $perso1->getAtk() .'<br/>';
echo 'Vie : ' . $perso1->getVie() .'<br/><br/>';

echo 'Nom : ' . $perso2->getNom() .'<br/>';
echo 'Atk : ' . $perso2->getAtk() .'<br/>';
echo 'Vie : ' . $perso2->getVie() .'<br/><br/><br/>';

// Petit combat en utilisant la function combat()
$perso1->combat($perso1, $perso2);

echo 'Merlin attaque Harry dans un combat à mort :<br/><br/>';

// On récupère les nouvelles valeurs toujours en faisant appel aux functions qui se chargent de retourner la valeur demandée
echo 'Nom : ' . $perso1->getNom() .'<br/>';
echo 'Atk : ' . $perso1->getAtk() .'<br/>';
echo 'Vie : ' . $perso1->getVie() .'<br/><br/>';

echo 'Nom : ' . $perso2->getNom() .'<br/>';
echo 'Atk : ' . $perso2->getAtk() .'<br/>';
echo 'Vie : ' . $perso2->getVie() .'<br/>';

?>