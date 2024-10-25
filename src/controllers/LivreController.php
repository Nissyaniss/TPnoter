<?php
class LivreController
{
	function ajouter()
	{
		$titre = $_POST['titre'];
		$auteur = $_POST['auteur'];
		$categorie = $_POST['categorie'];
		$annee_publication = $_POST['annee_publication'];
		$isbn = $_POST['isbn'];

		$livre = new Livre();
		$livre->ajouterLivre($titre, $auteur, $categorie, $annee_publication, $isbn);
	}

	function index()
	{
		$livre = new Livre();
		$livres = $livre->obtenirLivre();

		// Pas de vue dans la minute
	}

	function supprimer()
	{
		$livre = new Livre();
		$livre->supprimerLivre($_GET['id']); //?? jsp

		// Pas de vue dans la minute
	}
}
