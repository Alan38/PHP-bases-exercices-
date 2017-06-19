<!----------------------- FAIRE UNE BOUCLE: 1ère façon de faire --------------------->
<?php

for ($i = 1; $i <= 3; $i++) /*BOUCLE POUR $i = 1, $i DOIT ETRE INFERIEUR OU EGALE A 3; ON INCREMENTE DE 1 A CHAQUE BOUCLE*/
{
    echo 'J\'aime les spagetthis mais juste ' .$i. ' fois dans la semaine<br>';
}

?>

<br>
<br>
<br>




<!--------------------- FAIRE UNE BOUCLE: 2ème façon de faire ----------------------->
<?php

$i = 1; // ON DEFINIT UNE VALEUR A LA VARIABLE
    
while ($i <= 3) //BOUCLE $i DOIT ETRE INFERIEUR OU EGAL A 3
{
    echo 'J\'aime les spaghettis mais juste ' .$i. ' fois dans la semaine<br>';
    $i++; // ON INCREMENTE DE 1 A CHAQUE BOUCLE
}

?>