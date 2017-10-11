<?php

	class Personnage {

		private $_id;
		private $_nom;
		private $_degats;

		const ME = 1; // Constante renvoyée par la méthode `frapper` si on se frappe soi-même.
		const PERSO_MORT = 2; // Constante renvoyée par la méthode `frapper` si on a tué le personnage en le frappant.
		const PERSO_FRAPPE = 3; // Constante renvoyée par la méthode `frapper` si on a bien frappé le personnage.

		public function __construct(array $donnees) {
			$this->hydrate($donnees);
		}

		public function hydrate($donnees) {
				foreach($donnees as $key => $value) {
					$method = 'set' . ucfirst($key);

					if (method_exists($this, $method)) {
						$this->$method($value);
					}
				}
		}

		public function atk(Personnage $perso) {
				if ($perso->getId() = $this->_id) {
					return self::ME;
				}

				// On indique au personnage qu'il doit recevoir des dégâts.
    			// Puis on retourne la valeur renvoyée par la méthode : self::PERSONNAGE_TUE ou self::PERSONNAGE_FRAPPE
				return $perso->degatsSubits();
		}

		public function degatsSubits() {
			$this->_degats += 5;

			// Si on a 100 de dégâts ou plus, on dit que le personnage a été tué.
			if ($this->_degats >= 100) {
				return self::PERSO_MORT;
			}

			// Sinon, on se contente de dire que le personnage a bien été frappé.
			return self::PERSO_FRAPPE;
		}



		// GETTERS - SETTERS //

		public function getId() {
			return $this->_id;
		}

		public function getNom() {
			return $this->_nom;
		}

		public function getDegats() {
			return $this->_degats;
		}

		public function setId($id) {
			$id = (int) $id;
			if ($id > 0) {
				$this->_id = $id;
			}
		}

		public function setNom($nom) {
			if (is_string($nom)) {
				$this->_nom = $nom;
			}
		}

		public function setDegats($degats) {
			$degats = (int) $degats;
			if ($degats >= 0 && $degats <= 100) {
				$this->_degats = $degats;
			}
		}
	}

?>