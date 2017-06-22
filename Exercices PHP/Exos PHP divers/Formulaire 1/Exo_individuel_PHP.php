<!DOCTYPE html>
<html>
    <head>
    
    <title>Formulaire</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    
    <body>
    
        <form action="form.php" method="get">
            <p>Quel est votre prénom ? 
                <input type="text" name="prenom" maxlength="15" placeholder="Votre prénom">
            </p>
            <p>Quel age avez-vous ? 
                <input type="number" name="age" maxlength="3" placeholder="Votre age">
            </p>
            <input type="submit" value="Valider" name="submit">
        </form>
    
    </body>

</html>