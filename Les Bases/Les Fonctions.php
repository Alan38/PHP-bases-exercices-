<!---------------------------------- Fonctions -------------------------------------->

strlen($variable <!--OU--> 'texte')<!--COMPTE LE NOMBRE DE CARACTERES DANS UNE PHRASE DONNEE -->
str_shuffle($variable <!--OU--> 'texte')<!--MELANGE LES CARACTERES ENTRE EUX DE FACON ALEATOIRE -->
date('j M-Y H:i:s')<!--AFFICHE LA DATE ET L'HEURE-->
str_replace('lettre', 'lettre', $variable <!--OU-->'lettre', 'lettre', 'texte') <!-- REMPLACE une 'lettre' PAR UNE AUTRE 'LETTRE' DANS UNE VARIABLE OU DANS UN TEXTE -->
strtolower($variable <!--OU--> 'texte') <!-- METTRE EN MINUSCULE -->
strtoupper($variable <!--OU--> 'texte') <!-- METTRE EN MAJUSCULE -->



<!----------------------------- Creer sa propre fonction ---------------------------->

function NomDeLaFonction($variable) <!-- DECLARER SA PROPRE FONCTION -->
{
    <!-- ICI ON METTRA LES DIFFERENTS PARAMETRES ET CALCUL QUE FERA NOTRE FONCTION -->
}

NomDeLaFonction('texte') <!-- APPELER SA FONCTION CREEE PRECEDEMMENT -->

<!------------------------------------- Test ---------------------------------------->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php

//ON CREE UNE VARIABLE
$phrase = 'Ceci est une phrase un petit peu longue mais c\'est fait exprès !';
$RemplacerLesLettres = 'biiiim baaaam booouuuummmm'; // UNE AUTRE :D
    
echo $phrase; // ON DEMANDE D'AFFICHER SIMPLEMENT LE CONTENU DE LA VARIABLE
echo '<br><br>'; // SAUT DE LIGNE

echo strlen($phrase); // ON DEMANDE D'AFFICHER LE NOMBRE DE CARACTERE DANS LA VARIABLE
echo '<br><br>'; // SAUT DE LIGNE

echo strlen('Ceci est une phrase un petit peu longue mais c\'est fait exprès !');
// AUTRE MANIERE D'AFFICHER LE NOMBRE DE CARACTERE DANS UNE PHRASE SANS VARIABLE
echo '<br><br>'; // SAUT DE LIGNE

echo str_shuffle($phrase); // MELANGE DE FACON ALEATOIRE LES CARACTERE DE LA VARIABLE
echo '<br><br>'; // SAUT DE LIGNE

echo date('j M-Y H:i:s');// ON DEMANDE D'AFFICHER L'HEURE ET LA DATE
echo '<br><br>'; // SAUT DE LIGNE

echo str_replace('b', 'p', $RemplacerLesLettres); //REMPLACE LES LETTRES DEMANDEES DE LA VARIABLE CHOISIE

//------------------------------Test de la fonction créee--------------------------//

echo '<br><br><br><br><br>';
    
function Bonjour($prenom) // ON DECLARE LA FONCTION
{
    echo '<p>Bonjour ' .$prenom. ' comment vas-tu ?</p>'; // ON PARAMETRE LA FONCTION
}

Bonjour('Alan');                // ON EXECTUTE LA FONCTION,
Bonjour('David');               // LE CONTENU ENTRE ()  
Bonjour('Omar');                // SERA INSéRé
Bonjour('Jean-Baptiste');       // DANS LA VARIABLE
Bonjour('Caca');                // $prenom

?>