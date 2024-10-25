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
			$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
		} catch (Exception $e) {
			die("Erreur : " . $e->getMessage());
		}
	}

	function ajouterLivre($titre, $auteur, $categorie, $annee_publication, $isbn)
	{
		$requete = $this->pdo->prepare("INSERT INTO livre (titre, auteur, editeur, annee_publication, isbn) VALUES (:titre, :auteur, :editeur, :annee_publication, :isbn)");
		$requete->bindParam(":titre", $titre);
		$requete->bindParam(":auteur", $auteur);
		$requete->bindParam(":editeur", $editeur);
		$requete->bindParam(":annee_publication", $annee_publication);
		$requete->bindParam(":isbn", $isbn);
		$requete->execute();
	}
	function obtenirLivre()
	{
		$requete = $this->pdo->prepare("SELECT * FROM livre");
		$requete->execute();
		$livres = $requete->fetchAll(PDO::FETCH_ASSOC);
	}
	function supprimerLivre() {}
}
