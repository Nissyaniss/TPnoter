<?php
class LivreController
{
	private Livre $livre;

	function __construct()
	{
		$this->livre = new Livre();
	}

	function ajouter()
	{
		if (isset($_POST['titre']) && isset($_POST['auteur']) && isset($_POST['categorie']) && isset($_POST['annee_publication']) && isset($_POST['isbn'])) {
			$this->livre->ajouterLivre($_POST['titre'], $_POST['auteur'], $_POST['categorie'], $_POST['annee_publication'], $_POST['isbn']);
		}
		require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'livres' . DIRECTORY_SEPARATOR . 'new.php';
	}

	function index()
	{
		$livres = $this->livre->obtenirLivre();

		require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'livres' . DIRECTORY_SEPARATOR . 'index.php');
	}

	function supprimer($id)
	{
		$this->livre->supprimerLivre($id);

		$this->index();
	}
}
