function PostSlider() {
    console.log('Formulaire soumis'); // Message de débogage

    // Récupération des valeurs du formulaire
    var titre = document.getElementById('titre').value;
    var description = document.getElementById('description').value;
    var imageInput = document.getElementById('imageInput1');
    var image = imageInput.files[0];

    // Vérification que le fichier image est bien sélectionné
    if (!image) {
        alert('Aucune image sélectionnée'); // Alerte pour aucune image sélectionnée
        console.error('Aucune image sélectionnée');
        return;
    }

    // Lecture du fichier image en tant qu'URL
    var reader = new FileReader();
    reader.onload = function(e) {
        var imageUrl = e.target.result;

        // Préparation des données à envoyer
        var data = JSON.stringify({
            "api": "Slider",
            "data": {
                "title": titre,
                "descriptions": description,
                "images": imageUrl
            }
        });

        console.log('Données à envoyer:', data); // Message de débogage

        // Paramètres de la requête
        var settings = {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: data
        };

        // Exécution de la requête avec fetch
        fetch("http://localhost/cotechcom_api/index.php/Slider", settings)
        .then(response => {
            return response.text(); // Utilisez text() au lieu de json() pour afficher la réponse brute
        })
        .then(data => {
            console.log('Réponse brute du serveur:', data); // Affiche la réponse brute dans la console
            try {
                var jsonData = JSON.parse(data); // Essayer de parser manuellement en JSON
                console.log('Données JSON parsées:', jsonData);
                alert('Données envoyées avec succès !'); // Alerte de succès
            } catch (error) {
                console.error('Erreur de parsing JSON:', error);
                alert('Erreur de format JSON dans la réponse du serveur');
            }
        })
        .catch(error => {
            alert('Erreur: ' + error.message); // Alerte pour les erreurs
            console.error('Erreur:', error); // Affiche les erreurs dans la console
        });
    };

    // Lecture du fichier image
    reader.readAsDataURL(image);
}