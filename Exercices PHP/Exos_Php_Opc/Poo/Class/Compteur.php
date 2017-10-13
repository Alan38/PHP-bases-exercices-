<?php

// Un attribut statique appartient à la classe et non à un objet. Ainsi, tous les objets auront accès à cet attribut et cet attribut aura la même valeur pour tous les objets.

// Nous allons maintenant faire un petit exercice. Je veux que vous me fassiez une classe toute bête qui ne sert à rien. Seulement, à la fin du script, je veux pouvoir afficher le nombre de fois où la classe a été instanciée. Pour cela, vous aurez besoin d'un attribut appartenant à la classe (admettons $_compteur) qui est incrémenté dans le constructeur.

class Compteur {
    
    private static $_compteur = 0;
    
    public function __construct() {
        
        self::$_compteur++;
    }
    
    public function getCompteur() {
        
        return self::$_compteur;
    }
}

$compteur1 = new Compteur();
$compteur2 = new Compteur();
$compteur3 = new Compteur();
$compteur4 = new Compteur();
$compteur5 = new Compteur();
$compteur6 = new Compteur();
$compteur7 = new Compteur();

echo $compteur1->getCompteur();

?>