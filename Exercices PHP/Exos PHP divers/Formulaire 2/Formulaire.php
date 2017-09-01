<!DOCTYPE html>
<html>

    <head>
    
    </head>
    
    <body>
        
        <form action="Formulaire.php" method="POST" name="formulaire">
            
            <p>Nom :
                <input type="text" name="nom" value="" maxlength="30" placeholder="Votre nom">
            </p>
            
            <p>Prénom :
                <input type="text" name="prenom" value="" maxlength="20" placeholder="Votre prénom">
            </p>
            
            <p>Age :
                <input type="number" name="age" min="1" max="99" placeholder="Votre age">
            </p>
            
            <p>Adresse e-mail :
                <input type="text" name="mail" maxlength="50" placeholder="Votre e-mail">
            </p>
            
            <p>Sexe :
                <input type="radio" name="sexe" value="féminin">Femme
                <input type="radio" name="sexe" value="masculin">Homme
            </p>
            
            <p>Pays :
                <select name="pays">
                    <option></option>
                    <option value="Etats-unis">Etats-Unis</option>
                    <option value="Canada">Canada</option>
                    <option value="France">France</option>
                    <option value="Belgique">Belgique</option>
                    <option value="Suisse">Suisse</option>
                    <option value="Maroc">Maroc</option>
                    <option value="Algerie">Algérie</option>
                    <option value="Tunisie">Tunisie</option>
                    <option value="Espagne">Espagne</option>
                    <option value="Allemagne">Allemagne</option>
                    <option value="Angleterre">Angleterre</option>
                    <option value="Italie">Italie</option>
                </select>
            </p>
                
            <p>Inscription Newsletter :
                <input type="checkbox" name="newsletter" value="oui">
            </p>
            
            <input type="submit" name="submit" value="Valider">
            
        </form>
        
        <br><br><br>
        
        <?php
    
    $nom    = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $age    = htmlspecialchars($_POST['age']);
    $mail   = htmlspecialchars($_POST['mail']);
    $sexe   = htmlspecialchars($_POST['sexe']);
    $pays   = htmlspecialchars($_POST['pays']);
    $newsletter = htmlspecialchars($_POST['newsletter']);
    
    if (isset($_POST['submit']))
    {
        if (!empty($nom) && !empty($prenom) && !empty($age) && !empty($mail) && !empty($sexe) && !empty($pays) && !empty($newsletter))
        {
            echo 'Bonjour ' .$nom. ' ' .$prenom. ', je vois que tu as ' .$age. ' ans, que tu es de sexe ' .$sexe. ' et que tu habites dans le pays ' .$pays. '.<br>Ton adresse e-mail ' .$mail. ' est bien enregistrée !<br> Merci de t\'etre abonné à la newsletter, nous n\'enverrons jamais de pub (faut avouer que c\'est grave relou !), seulement des informations relatives a notre site.<br> <strong>Bonne journée</strong> !! =)';
        }
        
        elseif (!empty($nom) && !empty($prenom) && !empty($age) && !empty($mail) && !empty($sexe) && !empty($pays) && empty($newsletter))
        {
            echo 'Bonjour ' .$nom. ' ' .$prenom. ', je vois que tu as ' .$age. ' ans, que tu es de sexe ' .$sexe. ' et que tu habites dans le pays ' .$pays. '.<br>Ton adresse e-mail ' .$mail. ' est bien enregistrée !<br> Tu ne t\'es pas abonné a la newsletter, pas de problème ! ... Nous avons désormais votre adresse e-mail et nous nous ferons un plaisir de te spammer de pub intempestives à la place. <br><strong>Bonne journée !!</strong> ;-)';
        }
        
        else
        {
            echo 'Rempli le formulaire putain tu crois que je me fais chier a faire un formulaire pour que tu le remplisse pas ?<br> Allez rempli moi ça tout de suite !!!!!';
        }
    }
    
    ?>
    
    </body>
    
</html>