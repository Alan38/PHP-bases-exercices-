<?php
// EXEMPLE DE CONDITIONS UN PETIT PEU COMPLIQUEES
$note = 10;
$sage = true;

if ($note <= 10 && $sage == true)
{
    echo 'Bravo !!!';
}

    elseif ($note <= 10 && $sage != true)
    {
        echo 'Tu n\'as pas été sage et tu as eu des mauvaises notes... tu gagnes le droit de fermer ta bouche et de subir la colère divine ! >:(';
    }

    elseif ($note > 10 && $sage == true)
    {
        echo 'Bravo !!!';
    }

else
{
    echo 'Tu n\'a pas été sage mais tu as quand même des bonnes notes alors tu as le droit a un semi Bravo !';
}

?>

<br><br><br>
<br><br><br>


<?php
// EXEMPLE DE CONDITIONS SIMPLIFIEES MAIS AVEC MOINS D'OPTIONS
$note = 10;
$sage = true;

if ($note <= 10 && $sage != true)
{
    echo 'Tu n\'as pas été sage et tu as eu des mauvaises notes... tu gagnes le droit de fermer ta bouche et de subir la colère divine ! >:(';
}
else 
{
    echo 'Bravo !!!';
}

?>

<br><br><br>
<br><br><br>


<?php
// AUTRE MANIERE DE FAIRE SANS UTILISER 'IF/ELSEIF/ELSE' MAIS A UTILISER POUR DU CAS   // PAR CAS
$note = 10 ;

switch ($note)
{
    case 7:
        echo 'Ne lache rien tu vas y arriver !';
        break;
        
    case 8:
        echo 'Continue les efforts ! Ca va venir !';
        break;
        
    case 9:
        echo 'Continue les efforts ! Ca va venir !';
        break;
    
    case 10:
        echo 'Pas mal mais tu peux mieux faire !';
        break;
        
    case 11:
        echo 'Pas mal mais tu peux mieux faire !';
        break;
        
    case 12:
        echo 'Pas mal mais tu peux mieux faire !';
        break;
        
    case 13:
        echo 'Pas mal mais tu peux mieux faire !';
        break;
        
    case 14:
        echo 'C\'est bien, tu es doué !';
        break;
        
    case 15:
        echo 'C\'est bien, tu es vraiment doué !';
        break;
        
    case 16:
        echo 'Bravo !!!';
        break;
        
    case 17:
        echo 'Bravo !!!';
        break;
        
    case 18:
        echo 'Bravo !!!';
        break;
        
    case 19:
        echo 'Bravo !!!';
        break;
        
    case 20:
        echo 'Bravo !!!';
        break;
        
    default:
        echo 'T\'as rien compris au cours toi !';
        break;
}
    
?>