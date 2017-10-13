<?php
    // Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).
    public function hydrate(array $donnees) {
        
        foreach($donnees as $key => $value) {
            
            // On récupère le nom du setter correspondant a l'attribut
            $method = 'set' . ucfirst($key);
            
            // Si le setter existe
            if (method_exists($this, $method)) {
                
                // On appelle le setter
                $this->$method($value);
            }
        }
    }
