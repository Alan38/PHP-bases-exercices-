<?php

use \Alan\Autoloader;
use \Alan\Personnage;
use \Alan\Archer;

require 'Class/Autoloader.php';
Autoloader::register();

$perso1 = new Personnage('Merlin'); // creation de l'objet $perso1 sur le modèle de 'Personnage'
$perso2 = new Personnage('Harry'); // idem pour $perso2
$perso3 = new Archer('Legolas'); // idem pour $perso3 sauf qu'on se base sur le modele Archer.php

$perso3->combat($perso3, $perso1);// utilise la function combat de l'objet Personnage

// $perso2 se régénère
echo $perso3->regen();

// $perso3 attaque $perso1
$perso3->attaque($perso2);
echo '<br/> Il reste ' . $perso1->getVie() . ' points de vie à ' . $perso1->getNom();


?>