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
}
