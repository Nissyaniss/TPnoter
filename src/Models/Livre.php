<?php
class Livre
{
	private PDO $pdo;

	function __construct()
	{
		try {
			$host = "localhost";
			$dbname = "bibliotek";
			$user = "root";
			$password = "";
			$this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
		} catch (Exception $e) {
			die("Erreur : " . $e->getMessage());
		}
	}

	function ajouterLivre($titre, $auteur, $categorie, $annee_publication, $isbn)
	{
		$requete = $this->pdo->prepare("INSERT INTO livres (titre, auteur, categorie, annee_publication, isbn) VALUES (:titre, :auteur, :categorie, :annee_publication, :isbn)");
		$requete->bindParam(":titre", $titre);
		$requete->bindParam(":auteur", $auteur);
		$requete->bindParam(":categorie", $categorie);
		$requete->bindParam(":annee_publication", $annee_publication);
		$requete->bindParam(":isbn", $isbn);
		$requete->execute();
	}
	function obtenirLivre()
	{
		$requete = $this->pdo->prepare("SELECT * FROM livres");
		$requete->execute();
		return $requete->fetchAll(PDO::FETCH_ASSOC);
	}
	function supprimerLivre($id)
	{
		$requete = $this->pdo->prepare("DELETE FROM livres WHERE id = :id");
		$requete->bindParam(":id", $id);
		$requete->execute();
	}
}
