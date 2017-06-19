<!------------------------------ LES CONDITIONS ------------------------------------->
<?php // ON COMMENCE LE CODE PHP

$prenom = 'Mathieu'; // ON DEFINIT UNE VARIABLE

// EXEMPLE AVEC UNE SEULE CONDITION
if ($prenom = 'Mathieu') // SI $variable EST EGALE A 'Mathieu'
{
    echo '<p>Bonjour Mathieu</p>'; // ALORS ECRIT 'Bonjour Mathieu' 
}

else // SINON ECRIT 'Tu ne t'appelles pas Mathieu'
{
    echo '<p>Tu ne t\'appelles pas Mathieu</p>';
}

?> <!-- ON FERME LE CODE PHP -->


<br>
<br>
<br>


<?php // ON COMMENCE LE CODE PHP

//ON DEFINIT DEUX VARIABLES
$prenom = 'Mathieu';  
$age    = 56;       

// EXEMPLE AVEC PLUSIEURS CONDITIONS
if ($prenom = 'Mathieu' && $age = 56) /* SI $variable EST EGALE A 'Mathieu' et que $variable2 EST EGALE A 1 */
{
    echo '<p>Bonjour Mathieu, tu as 56 ans !</p>'; /* ALORS ECRIT 'Bonjour Mathieu, la variable2 est vraie ! */
}

else
{
    echo '<p>Les deux conditions ne sont pas rempli !</p>'; /* SINON ECRIT Les deux conditions ne sont pas rempli ! */
}

?> <!-- ON FERME LE CODE PHP -->



<br>
<br>
<br>


<?php // ON COMMENCE LE CODE PHP

// ON DEFINIT 3 VARIABLES
$prenom = 'Mathieu';
$age    = 56;       
$adulte = true;

// EXEMPLE AVEC PLUSIEURS 'SI'
if ($prenom = 'Mathieu' && $age = 56 && $adulte = true)/* SI $prenom EST EGALE A 'Mathieu' et que $age EST EGALE A 56 ET QUE $adulte vaut true */
{
    echo '<p>Bonjour Mathieu, les 3 conditions sont rempli !</p>'; /* ALORS ECRIT Bonjour Mathieu, les 3 conditions sont rempli ! */
}

elseif ($prenom = 'Mathieu' && $age = 56 && $adulte != true) /* SINON SI $prenom EST EGALE A 'Mathieu' et que $age EST EGALE A 56 ET QUE $adulte EST DIFFERENT DE true */
{
    echo '<p>Bonjour Mathieu, seulement 2 conditions sont rempli !</p>'; /* ALORS ECRIT Bonjour Mathieu, seulement 2 conditions sont rempli ! */
}

elseif ($prenom = 'Mathieu' && $age != 56 && $adulte != true) /* SINON SI $prenom EST EGALE A 'Mathieu' et que $age EST DIFFERENT DE 56 ET QUE $adulte EST DIFFERENT DE true */
{
    echo '<p>Bonjour Mathieu, seulement 1 condition est rempli !</p>'; /* ALORS ECRIT Bonjour Mathieu, seulement 1 condition est rempli ! */
}

else /* SINON  */
{
    echo '<p>Bonjour, aucune conditions n\'est rempli !</p>'; /* ECRIT Bonjour, aucune conditions n\'est rempli ! */
}

?> <!-- ON FERME LE CODE PHP -->