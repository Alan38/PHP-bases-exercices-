<?php

class Article {

	protected $ref;
	protected $nom;
	protected $prix;
	protected $qte;

	public function __construct($nom, $prix, $qte) {
		$this->nom = $nom;
		$this->prix = $prix;
		$this->qte = $qte;
	}

	public function getRef() {
		return $this->ref;
	}

	public function getNom() {
		return $this->nom;
	}

	public function getPrix() {
		return $this->prix;
	}

	public function getQte() {
		return $this->qte;
	}

	public function setNom($nom) {
		return $this->nom = $nom;
	}

	public function setPrix($prix) {
		return $this->prix = $prix;
	}

	public function setQte($qte) {
		return $this->qte = $qte;
	}

	public function toString() {
		echo '<strong>Référence :</strong> ' . $this->getRef() . '<br/> <strong>Produit :</strong> ' . $this->getNom() . '<br/><strong>Prix :</strong> ' . $this->getPrix() . '<br/><strong>Quantité :</strong> ' . $this->getQte() . '<br/><br/>';
	}
}

?>