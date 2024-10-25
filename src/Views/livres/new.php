<h1>Ajouter un livre</h1>
<form action="?action=ajouter" method="post">
	<div class="mb-3">
		<label for="titre" class="form-label">Titre</label>
		<input type="text" class="form-control" name="titre" id="titre" required>
	</div>
	<div class="mb-3">
		<label for="auteur" class="form-label">Auteur</label>
		<input type="text" class="form-control" name="auteur" id="auteur" required>
	</div>
	<div class="mb-3">
		<label for="categorie" class="form-label">Catégorie</label>
		<input type="text" class="form-control" name="categorie" id="categorie" required>
	</div>
	<div class="mb-3">
		<label for="annee_publication" class="form-label">Année de publication</label>
		<input type="number" class="form-control" name="annee_publication" id="annee_publication" required>
	</div>
	<div class="mb-3">
		<label for="isbn" class="form-label">ISBN</label>
		<input type="text" class="form-control" name="isbn" id="isbn" required>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary" id="enregistrer"
			onclick="return validerForm()">Enregistrer</label>
	</div>
</form>