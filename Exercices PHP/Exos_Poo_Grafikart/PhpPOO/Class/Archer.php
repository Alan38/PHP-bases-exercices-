<?php

namespace Alan;

/**
* Class Archer
* Extension de la class Personnage
*/
class Archer extends Personnage{
    /**
    * @var $vie int, points de vie
    */
    
    public function __construct($nom) {
        $this->vie = $this->vie / 2;
        parent::__construct($nom);
    }
    
    /**
    * @param $cible array, objet contenant les données d'un personnage
    * Permet d'attaquer un personnage
    */
    public function attaque($cible) {
        $cible->vie -= $this->atk;
        parent::attaque($cible); // Appelle de la function attaque dans la class parent Personnage
        $cible->no_negative();
    }
    
    /**
    * @param $vie int, nombre de points de vie a régénérer
    */
    public function regen($vie = null) {
        if(is_null($vie)) {
            return $this->getNom() . ' se régénère jusqu\'à '  . $this->vie = 60 . ' points de vie';
        }
        else {
            return $this->getNom() . ' se régénère jusqu\'à ' . $this->vie += $vie . ' points de vie';
        }
    }
}

?>