<?php

namespace Alan\html;
/**
* Class Form
* Permet de générer un formulaire rapidement et simplement
*/
class Form {
    
    /**
    * @var array, Données utilisées par le formulaire
    */
    private $data;
    
    /**
    * @var string, Tag utilisée pour entourer les champs
    */
    public $p = 'p';
    
    /**
    * @param array $data Données utilisées par le formulaire
    */
    public function __construct($data) {
        $this->data = $data;
    }
    
    /**
    * @param $html string Code html à entourer
    * @return string
    */
    protected function surround($html) {
        return "<{$this->p}>{$html}</{$this->p}>";
    }
    
    /**
    * @param $index string Index de la valeur a récupérer
    * @return string
    */
    protected function getValue($index) {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
    
    /**
    * @param $type string
    * @param $name string
    * @param $placeholder string
    * @return string
    */
    public function input($type ,$name, $placeholder) {
        return $this->surround('<input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '" placeholder="' . $placeholder . '">');
    }
    
    /**
    * @return string
    */
    public function button() {
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}


?>