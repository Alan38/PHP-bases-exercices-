<?php
//  UN VISIBILITéE PRIVATE FAIT EN SOTRE QU'ON NE PEUT PAS Y ACCEDER (ET AUSSI CELA INDIQUE QUE NOUS NE DEVONS NORMALEMENT PAS LA MODIFIER) AVEC PAR EXEMPLE $perso1->vie, ON EST OBLIGé D'Y ACCEDER EN RETOURNANT LA VALEUR DANS UNE FUNCTION PUBLIC
class Personnage {
    
    private $vie = 100; // attribut private d'une vie
    private $atk = 20; // attribut private de l'attaque
    private $nom; // attribut private du nom
    
    public function __construct($nom) {
        $this->nom = $nom;
    }
    
    public function getNom() { // On retourne la valeur de $nom dans la function getNom
        return $this->nom;
    }
    
    public function getVie() { // On retourne la valeur de $vie dans la function getVie
        return $this->vie;    
    }
    
    public function getAtk() { // On retourne la valeur de $atk dans la function getAtk
        return $this->atk;    
    }    
    
    public function regen($vie = null) {
        if(is_null($vie)) {
            $this->vie = 100;
        }
        else {
            $this->vie += $vie;
        }
    }

    public function mort() {
        return $this->vie <= 0;
    }
    
    // function privé donc qui n'est pas a modifier
    private function no_negative () {
        if ($this->vie < 0) {
            $this->vie = 0;
        }
    }
    
    public function attaque($cible) {
        $cible->vie -= $this->atk;
        $cible->no_negative();
    }

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