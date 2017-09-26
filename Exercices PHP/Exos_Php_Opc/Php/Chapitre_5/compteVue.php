<?php
$fichier = fopen('compteur', 'r+'); // Ouverture  du fichier compteur en r+ (lecture et écriture)
$pages_vues = fgets($fichier); // Lis la premiere ligne du fichier compteur
$pages_vues += 1; // Ajoute 1 a $pages_vues
fseek($fichier, 0); // On remet le curseur au début du fichier
fputs($fichier, $pages_vues); // On écrit le nouveau nombre de pages vues
fclose($fichier); // on ferme le fichier

echo 'Cette page a été visitée ' . $pages_vues . ' fois !'; // On affiche tout ça sous la forme d'une phrase
?>