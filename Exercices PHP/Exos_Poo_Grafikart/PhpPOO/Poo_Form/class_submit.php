<?php

class submit {
    
    
    
    public function __construct() {
        
    }
    
    public function traitement ($username, $$password) {
        if (!empty($username) && !empty($password)) {
            return 'Bonjour ' . $username . ', ton mot de passse est ' . $password . ' !';
        }
        else {
            return 'Tu n\'as pas renseigné correctement les champs';
        }
    }
}

?>