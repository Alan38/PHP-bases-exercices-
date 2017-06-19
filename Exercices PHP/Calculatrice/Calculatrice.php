<!---------------------------Projet 2 : Calculatrice---------------------------------------
I -Un formulaire avec 4 boutons, un pour chaque opération : +, - , /, *.

II - Deux listes de choix de 0 à 9, afin de choisir les opérandes.

III - Après le click sur un bouton =, on réalise l’opération choisie.

IV - GET: Avec les paramètres x & y, la calculatrice réalise l’addition de x & y et affiche le résultat.
------------------------------------------------------------------------------------------>
<!DOCTYPE html>
<html>

    <head>
        <title>Calculatrice</title>
        <meta charset="UTF-8">
    </head>
    
    <body>
        <!-- Le formulaire -->
        <form action="Calculatrice.php" name="calcul_PHP" method="GET">
            
            <!-- Le nombre 1 -->
            <select name="number1">
                <option></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
            
            <!-- Les choix d'opérations -->
            <select name="operations">
                <option></option>
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="div">/</option>
                <option value="multi">*</option>
            </select>
            
            <!-- La nombre 2 -->
            <select name="number2">
                <option></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
            
            <!-- Le bouton '=' -->
            <p><input type="submit" name="submit" value="="></p>
        
        </form>
        
            <?php
        
                $number1 = (int)$_GET['number1'];
                $number2 = (int)$_GET['number2'];
                $operations = $_GET['operations'];
                    
                // Si le bouton 'submit' existe
                if (isset($_GET['submit']) && !empty($operations))
                {   
                    switch($operations)
                    {
                        case 'add': // Si le choix est positionné sur '+'
                            $result = $number1 + $number2;
                            echo '<p>La somme de ces deux nombres est ' .$result. '</p>';
                            break;
                            
                        case 'sub': // Si le choix d'opérations est positionnné sur '-'
                            $result = $number1 - $number2;
                            echo '<p>La différence des ces deux nombres est ' .$result. '</p>';
                            break;
                            
                        case 'multi': // Si le choix d'opérations est positionnné sur '*'
                            $result = $number1 * $number2;
                            echo '<p>Le produit de ces deux nombres est ' .$result. '</p>';
                            break;
                            
                        case 'div': // Si le choix d'opérations est positionnné sur '/'
                            if ($number2 == 0) // Si le le choix du nombre2 est égal a 0
                            {
                                echo '<p>On ne peut pas diviser par 0 !</p>';
                            }
                            else // Sinon afficher le résultat
                            {
                                $result = $number1 / $number2;
                                echo '<p>Le quotient de ces deux nombres est ' .$result. '</p>';
                            }
                            break;
                    }
                }
                
                else
                {
                    echo 'Veuillez saisir des valeurs pour effectuer votre calcul.';
                }
            
            ?>
    
    </body>

</html>