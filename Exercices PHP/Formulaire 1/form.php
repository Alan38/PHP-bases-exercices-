<!DOCTYPE html>
<html>
    <head>
        
        <title>Bonjour !</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    
    <body>
        
        <?php
        
        $error = 'Erreur, veuillez remplir le formulaire !';
        $prenom = htmlspecialchars($_GET['prenom']);
        $age = htmlspecialchars($_GET['age']);
         
        if ($prenom == 'Alan' && $age == '24')
        {
            echo 'Bonjour Maitre, j\'éspère que tout va bien pour vous !';
        }
        
        elseif (empty($prenom) && !empty($age))
        {
            echo 'Bonjour, vous avez ' .$age. 'ans mais je ne connais pas votre prénom.';
        }
        
        elseif (!empty($prenom) && empty($age))
        {
            echo 'Bonjour ' .$prenom.', je ne connais pas votre age.';
        }
        
        elseif (!empty($prenom && $age))
        {
            echo 'Bonjour ' .$prenom. ', ';
            echo 'vous avez ' .$age. 'ans.';    
        }
        
        else 
        {
            echo $error;
        }
        
        ?>
        
        <a href="Exo_individuel_PHP.php">Retour au formulaire !</a>
    </body>
</html>