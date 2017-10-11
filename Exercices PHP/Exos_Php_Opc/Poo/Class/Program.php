<?php

require 'Article.php';

class Program {
	
	private $host = 'localhost';
	private $dbName = 'GestionArticles';
	private $user = 'root';
	private $mdp = 'alan38160';

	public function __construct() {

	}

	public function stock($article) {
		try {
			$db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName . ';charset=utf8', $this->user, $this->mdp);

			$req = $db->prepare('INSERT INTO Articles (nom, prix, qte) VALUES (:nom, :prix, :qte)');
			$req->execute(array(
				'nom' => $article->getNom(),
				'prix' => $article->getPrix(),
				'qte' => $article->getQte(),
			));
		}
		catch(Exception $e) {
			die('Erreur :' . $e->getMessage());
		}
	}

	public function searchByRef($ref) {
		try {
			$db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName . ';charset=utf8', $this->user, $this->mdp);

			$req = $db->prepare('SELECT ref, nom, prix, qte FROM Articles WHERE ref = :ref');
			$req->execute(array(
				'ref' => $ref,
			));
			$donnees = $req->fetch();

			return 'Référence : ' . $donnees['ref'] . '<br/>Nom : ' . $donnees['nom'] . '<br/>Prix : ' . $donnees['prix'] . '<br/>Quantité : ' . $donnees['qte'] . '<br/><br/>';

			$req->closeCursor();
		}
		catch(Exception $e) {
			die('Erreur :' . $e->getMessage());
		}
	}

	public function searchByName($nom) {
		try {
			$db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName . ';charset=utf8', $this->user, $this->mdp);

			$req = $db->prepare('SELECT ref, nom, prix, qte FROM Articles WHERE nom = :nom');
			$req->execute(array(
				'nom' => $nom,
			));
			$donnees = $req->fetch();

			return 'Référence : ' . $donnees['ref'] . '<br/>Nom : ' . $donnees['nom'] . '<br/>Prix : ' . $donnees['prix'] . '<br/>Quantité : ' . $donnees['qte'] . '<br/><br/>';

			$req->closeCursor();

		}
		catch(Exception $e) {
			die('Erreur :' . $e->getMessage());
		}
	}

	public function deleteByRef($ref) {
		try {
			$db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName . ';charset=utf8', $this->user, $this->mdp);

			$req = $db->prepare('DELETE FROM Articles WHERE ref = :ref');
			$req->execute(array(
				'ref' => $ref,
			));

			return 'L\'article n° ' . $ref . ' à bien été supprimé !<br/><br/>';
		}
		catch(Exception $e) {
			die('Erreur :' . $e->getMessage());
		}
	}

	public function updateByRef($ref, $nom, $prix, $qte) {
		try {
			$db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName . ';charset=utf8', $this->user, $this->mdp);

			$req = $db->prepare('UPDATE Articles SET nom = :nom, prix = :prix, qte = :qte WHERE ref = :ref');
			$req->execute(array(
				'nom' => $nom,
				'prix' => $prix,
				'qte' => $qte,
				'ref' => $ref,
			));

			return 'L\'article a bien été modifié avec les valeurs suivantes :<br/>Référence : ' . $ref . '<br/>Nom : ' . $nom . '<br/>Prix : ' . $prix . '<br/>Quantité : ' . $qte . '<br/><br/>';
		}
		catch(Exception $e) {
			die('Erreur :' . $e->getMessage());
		}
	}
}

$gestion = new Program();

?>