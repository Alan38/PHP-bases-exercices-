<?php

class ChainePlus {

	private $_chaine;

	public function __construct($string) {
		$this->_chaine = $string;
	}

	public function gras() {
		return '<strong>' . $this->_chaine . '</strong>';
	}

	public function italique() {
		return '<i>' . $this->_chaine . '</i>';
	}

	public function souligne() {
		return '<span style="text-decoration: underline;">' . $this->_chaine . '</span>';
	}

	public function majuscule() {
		return strtoupper($this->_chaine);
	}
}

$text = new ChainePlus('Programmation orientée objet en PHP');

echo 'Gras : ' . $text->gras() . '<br/>';
echo 'Italique : ' .$text->italique() . '<br/>';
echo 'Souligné : ' .$text->souligne() . '<br/>';
echo 'Majuscules : ' .$text->majuscule() . '<br/>';

?>