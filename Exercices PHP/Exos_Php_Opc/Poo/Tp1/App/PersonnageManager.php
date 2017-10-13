<?php

	class PersonnageManager {

		private $_db; // Instance de POO

		public function __construct($db) {

			$this->setDb() = $db;
		}

		public function add(Personnage $perso) {

				$req = $this->_db->prepare('INSERT INTO Personnage(nom) VALUES(:nom)');
				$req->bindValue(':nom', $perso->getNom());
				$req->execute();

				$perso->hydrate(array(
					'id' => $this->_db->lastInsertid(),
					'degats' => 0,
				));
		}

		public function count() {

			return $this->_db->query('SELECT COUNT(*) FROM Personnage')->fetchColumn();
		}

		public function delete(Personnage $perso) {

			$this->_db->exec('DELETE FROM Personnage WHERE id =' . $perso->getId());
		}

		public function exists($info) {
			if (is_int($id)) {
				return (bool) $this->_db->query('SELECT COUNT(*) FROM Personnage WHERE id =' . $info)->fetchColumn();
			}

			$req = $this->_db->prepare('SELECT COUNT(*) FROM Personnage WHERE nom = :nom');
			$req->execute([':nom' => $info]);

			return (bool) $q->fetchColumn();
		}

		public function get($info) {
			
		}

		public function getList($nom) {

		}

		public function update(Personnage $perso) {

		}

		public function setDb(PDO $db) {
			$this->_db = $db;
		}
	}

?>