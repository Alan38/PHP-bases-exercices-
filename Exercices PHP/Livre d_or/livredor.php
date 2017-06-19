<!DOCTYPE html>
<!-- Projet 1 : Livre d’Or

I - L’utilisateur peut renseigner son nom et un commentaire.

II - Au click du bouton "soumettre", le commentaire est horodaté
et enregistré en html dans un fichier en associante Nom, Date
et Commentaire.

III - À l’ouverture de la page, le formulaire est affiché, avec en
dessous la liste des commentaire précédents (lu depuis le
fichier) avec un séparateur entre chaque commentaire.

IV - GET: On peut directement rajouter un commentaire, en
appelant la page avec les paramètres 'nom et commentaire' 
-->

<html>
    
    <head>
        
        <title>Livre d'Or</title>
        <meta charset = UTF-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    
    <body>
        
        <form action="livredor.php" method="get">
            <p class="prenom">Quel est votre prénom ?
                <input type="text" name="prenom" maxlength="15" placeholder="Entrez votre prénom">
            </p>
            <p class="com"><span>Votre commentaire</span>
                <textarea rows="4" cols="50" name="com" placeholder="Insérer votre commentaire ici" maxlength="250"></textarea>
            </p>
            
            <input type="submit" value="Envoyer" name="submit">
        </form>
        
        <?php
        
            $prenom = htmlspecialchars($_GET['prenom']);
            $comment = htmlspecialchars($_GET['com']);
            $date   = date('d-m-Y à H:i');
            $post   = $prenom.' a écrit le '.$date.': '.$comment. '<hr>';
            $error  = 'Veuillez remplir tous les champs ! <br><hr>';
            $merci = 'Merci, vous pouvez voir votre commentaire ci-dessous !<br><hr>';
        
            if (!empty($prenom) && !empty($comment))
            { 
                $fp = fopen("commentaire.txt", "c+");
                $fget = fgets($fp);
                
                fwrite($fp,$post);
                fclose($fp);
                echo $merci;
            }
            
            else 
            {
                echo $error;
            }
            
            $fp = fopen("commentaire.txt", "r");
        
            for ($i = 0; $i < 3; $i++)
            {   
                $fget = fgets($fp)
        ?>      
                <div>
                    <?php echo $fget; ?>
                </div>
        <?php
            }
        ?>
        
    </body>
    
</html>