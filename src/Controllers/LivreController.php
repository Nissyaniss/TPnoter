<?php
class LivreController
{
	function ajouter()
	{
		if (isset($_POST['titre']) && isset($_POST['auteur']) && isset($_POST['categorie']) && isset($_POST['annee_publication']) && isset($_POST['isbn'])) {
			$livre = new Livre();
			$this->$livre->ajouterLivre($_POST['titre'], $_POST['auteur'], $_POST['categorie'], $_POST['annee_publication'], $_POST['isbn']);
		}
	}

	function index()
	{
		$livre = new Livre();
		$livres = $livre->obtenirLivre();

		require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'livres' . DIRECTORY_SEPARATOR . 'index.php.php');
	}

	function supprimer()
	{
		$livre = new Livre();
		$livre->supprimerLivre($_GET['id']); //?? jsp

		// Pas de vue dans la minute
	}
}
