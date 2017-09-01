array <!-- TABLEAU -->
foreach <!-- BOUCLE SPECIALE POUR LES TABLEAUX -->

<br><br><br>
<br><br><br>

<!------------------- AFICHER UN TABLEAU: 1ère façon de faire ---------------------->
<?php
    
$tablen1 = array //ON CREE LE TABLEAU
    ('place 1' => 'Fanny',                //1er ELEMENT DU TABLEAU
     'place 2' => 'Alan',                 //2eme ELEMENT DU TABLEAU
     'place 3' => 'Stephane',             //3eme ELEMENT DU TABLEAU
     'place 4' => 'Joeffrey',             //4eme ELEMENT DU TABLEAU
     'place 5' => 'Thibaud');             //5eme ELEMENT DU TABLEAU

foreach ($tablen1/*LE TABLEAU*/ as $place1 => $prenom1/*LE CONTENU DU TABLEAU*/)
{
    echo '<p>A la ' .$place1. ' il y a ' .$prenom1.'</p>'; 
}

?>

<br>
<br>
<br>

<?php

$tablen2 = array //ON CREE LE TABLEAU
    ('place 1 de la 2eme table' => 'Lise',      //1er ELEMENT DU TABLEAU
     'place 2 de la 2eme table' => 'Rita',      //2eme ELEMENT DU TABLEAU
     'place 3 de la 2eme table' => 'Medhi',     //3eme ELEMENT DU TABLEAU
     'place 4 de la 2eme table' => 'Kevin',     //4eme ELEMENT DU TABLEAU
     'place 5 de la 2eme table' => 'Piotr');    //5eme ELEMENT DU TABLEAU

foreach ($tablen2/*LE TABLEAU*/ as $place2 => $prenom2/*LE CONTENU DU TABLEAU*/)
{
    echo '<p>A la ' .$place2. ' il y a ' .$prenom2. '</p>';
}

?>

<br>
<br>
<br>



<!-------------------- AFFICHER UN TABLEAU: 2ème façon de faire -------------------->
<?php

$tablen3 = array //ON CREE LE TABLEAU
    ('place 1 = Benoit',                    //1er ELEMENT DU TABLEAU
     'place 2 = Nolwenn',                   //2eme ELEMENT DU TABLEAU
     'place 3 = Mylène',                    //3eme ELEMENT DU TABLEAU
     'place 4 = Nima');                     //4eme ELEMENT DU TABLEAU

echo '<p>Table n°3</p>';//ECRIT LE TITRE DU TABLEAU

for ($numero = 0; $numero < 4; $numero++)
{
    echo '<p>' .$tablen3[$numero]. '</p>'; //ECRIT LE CONTENU DU TABLEAU
}

?>