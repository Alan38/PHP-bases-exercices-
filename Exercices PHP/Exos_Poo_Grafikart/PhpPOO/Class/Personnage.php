<?php

namespace Alan;

// creation de l'objet modèle personnage
class Personnage {
    
    protected $vie = 100; // attribut d'une vie
    protected $atk = 20; // attribut de l'attaque
    protected $nom; // attribut du nom
    
    // function qui permet de saisir le nom du perso quand on créé un nouvel objet sur le modele Personnage
    public function __construct($nom) {
        $this->nom = $nom;
    }
    
    public function getNom() {
        return $this->nom;
    }
    
    public function getVie() {
        return $this->vie;
    }
    
    // function de regeneration d'un personnage
    public function regen($vie = null) {
        if(is_null($vie)) {
            return $this->getNom() . ' se régénère jusqu\'à ' . $this->vie = 100 . ' points de vie';
        }
        else {
            return $this->getNom() . ' se régénrère jusqu\'à ' . $this->vie += $vie . ' points de vie';
        }
    }
    
    // function pour savoir si un personnage est mort ou pas
    public function mort() {
        return $this->vie <= 0;
    }
    
    public function no_negative() {
        if ($this->vie < 0) {
            $this->vie = 0;
        }
    }
    
    // function pour attaquer
    public function attaque($cible) {
        $cible->vie -= $this->atk;
        $cible->no_negative();
    }
    
    // function qui simule un combat a mort entre 2 personnages
    public function combat($cible1, $cible2) {
        while ($cible1->vie > 0 || $cible2->vie > 0) {
            $cible1->attaque($cible2);
            
            if ($cible2->mort()) {
                echo $cible2->getNom() . ' est mort :(<br/>';
                echo $cible1->getNom() . ' a survécu avec ' . $cible1->getVie() . ' points de vie<br/>';
                break;
            }
            
            $cible2->attaque($cible1);
            
            
            if ($cible1->mort()) {
                echo $cible1->getNom() . ' est mort :(<br/>';
                echo $cible2->getNom() . ' a survécu avec ' . $cible2->getVie() . ' points de vie<br/>';
                break;
            }
        }
    }
}

?>