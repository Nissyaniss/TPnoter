function demanderValidation() {
	return confirm("Voulez-vous vraiment supprimer ce livre ?");
}

function validerForm() {
	const isbn = document.getElementById("isbn");
	if (isbn.value.length !== 13) {
		alert("L'ISBN doit faire exactement 13 caractères");
		return false;
	}

	return true;
}
