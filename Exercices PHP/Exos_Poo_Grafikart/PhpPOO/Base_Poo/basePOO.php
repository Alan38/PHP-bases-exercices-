<?php
// le fichier Personnage.php est requis
require 'Personnage.php';

$perso1 = new Personnage('Merlin'); // creation de l'objet $perso1 sur le modèle de 'Personnage'
$perso2 = new Personnage('Harry'); // idem pour $perso2

$perso1->combat($perso1, $perso2);// utilise la function combat de l'objet Personnage
// $perso2->combat($perso2, $perso1);

// On utilise la function 'mort()' pour savoir si $perso2 est mort
if ($perso2->mort()) {
    echo $perso2->nom . ' est mort :(<br/>';
    echo $perso1->nom . ' a survécu avec ' . $perso1->vie . ' points de vie<br/>';
}
elseif ($perso1->mort()) { // Si $perso1 est mort
    echo $perso1->nom . ' est mort :(<br/>';
    echo $perso2->nom . ' a survécu avec ' . $perso2->vie . ' points de vie<br/>';
}
else { // si aucun des deux n'est mort
    echo $perso1->nom . ' a survécu avec ' . $perso1->vie . ' points de vie<br/>';
    echo $perso2->nom . ' a survécu avec ' . $perso2->vie . ' points de vie<br/>';
}


?>