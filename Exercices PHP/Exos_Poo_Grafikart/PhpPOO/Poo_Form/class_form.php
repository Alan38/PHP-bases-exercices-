<?php
class Form {
    
    private $data;
    public $p = 'p';
    
    public function __construct($data) {
        $this->data = $data;
    }
    
    private function paragraphe($html) {
        return "<{$this->p}>{$html}</{$this->p}>";
    }
    
    private function getValue($index) {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
    
    public function input($name) {
        return $this->paragraphe('<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">');
    }
    
    public function button() {
        return $this->paragraphe('<button type="submit">Envoyer</button>');
    }
    
    public function traitement($username, $password) {
        
        if (!empty($username) && !empty($password)) {
            return 'Bonjour ' . $username . ', ton mot de pass est ' . $password;  
        }
        else {
            return 'Tu n\'as pas empli correctement les champs';
        }
    }
}


?>