<div class="row">
	<?php foreach ($livres as $livre) : ?>
	<div class="col-4 p-2">
		<div class="card">
			<div class="card-body">
				<h2 class="card-title">
					<?php echo $livre['titre']; ?>
				</h2>
				<p class="card-text">
					<?php echo $livre['description']; ?>
					Auteur :
					<?php echo $livre['auteur']; ?>
					Catégorie :
					<?php echo $livre['categorie']; ?>
					Année de publication :
					<?php echo $livre['annee_publication']; ?>
					ISBN :
					<?php echo $livre['isbn']; ?>
				</p>
				<a href="?action=supprimer&id=<?php echo $livre['id']; ?>" class="btn btn-danger"
					onclick="return demanderValidation()">Supprimer</a>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>

<a href="?c=accueil" class="btn btn-primary">Retour a l'accueil</a>