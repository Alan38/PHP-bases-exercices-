<?php
// creation de l'objet modèle personnage
class Personnage {
    
    public $vie = 100; // attribut d'une vie
    public $atk = 20; // attribut de l'attaque
    public $nom; // attribut du nom
    
    // function qui permet de saisir le nom du perso quand on créé un nouvel objet sur le modele Personnage
    public function __construct($nom) {
        $this->nom = $nom;
    }
    
    // function de regeneration d'un personnage
    public function regen($vie = null) {
        if(is_null($vie)) {
            $this->vie = 100;
        }
        else {
            $this->vie += $vie;
        }
    }
    
    // function pour savoir si un personnage est mort ou non
    public function mort() {
        return $this->vie <= 0;
    }
    
    // function pour attaquer
    public function attaque($cible) {
        $cible->vie -= $this->atk;
    }
    
    // function qui simule un combat a mort entre 2 personnages
    public function combat($cible1, $cible2) {
        while ($cible1->vie > 0 || $cible2->vie > 0) {
            $cible1->attaque($cible2);
            
            if ($cible1->vie == 0) {
                break;
            }
            elseif ($cible2->vie == 0) {
                break;
            }
        
            $cible2->attaque($cible1);
        }
    }
}

?>