<?php
/**
* Class Form
* Permet de générer un formulaire rapidement et simplement
*/
class Form {
    
    /**
    * @var array Données utilisées par le formulaire
    */
    private $data;
    
    /**
    * @var string Tag utilisée pour entourer les champs
    */
    public $p = 'p';
    
    /**
    * @param array $data Données utilisées par le formulaire
    */
    */
    public function __construct($data) {
        $this->data = $data;
    }
    
    /**
    * @param $html string Code html à entourer
    * @return string
    */
    private function paragraphe($html) {
        return "<{$this->p}>{$html}</{$this->p}>";
    }
    
    /**
    * @param $index string Index de la valeur a récupérer
    * @return string
    */
    private function getValue($index) {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
    
    /**
    * @param $name string
    * @return string
    */
    public function input($name) {
        return $this->paragraphe('<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">');
    }
    
    /**
    * @return string
    */
    public function button() {
        return $this->paragraphe('<button type="submit">Envoyer</button>');
    }
}


?>