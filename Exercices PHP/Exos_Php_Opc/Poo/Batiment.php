<?php

abstract class Batiment {

	protected $Adresse;

	public function __construct() {
	}

	public function getAdresse() {
		return $this->adresse;
	}

	public function setAdresse($newAdresse) {
		return $this->adresse = $newAdresse;
	}
}

class Maison extends Batiment {

	protected $NbPieces;

	public function __construct($adresse, $nbPieces) {
		$this->adresse = $adresse;
		$this->NbPieces = $nbPieces;
	}

	public function getNbPieces() {
		return $this->adresse;
	}

	public function setNbPieces($newNbPieces) {
		return $this->NbPieces = $newNbPieces;
	}

	public function toString() {
		return '<strong>Adresse de la Maison :</strong> ' . $this->adresse . '<br/> <strong>Nombre de Pièces : </strong>' . $this->NbPieces . '<br/><br/>';
	}
}

$Maison1 = new Maison('6 rue léon lambert', 8);
$Maison2 = new Maison('rue du cul', 5);
$Maison3 = new Maison('18 boulevard de la gare', 49);

$Maison2->setNbPieces(2);
$Maison2->setAdresse('6 rue de la poterie');

echo $Maison1->toString();
echo $Maison2->toString();
echo $Maison3->toString();

?>