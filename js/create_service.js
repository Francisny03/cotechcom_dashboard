function PostService() {
    console.log('Formulaire soumis'); // Message de débogage
    tinymce.triggerSave();
    // Récupération des valeurs du formulaire
    var titre = document.getElementById('titre').value;
    var description = document.getElementById('description').value;
    var point = document.getElementById('point').value; // Correction : "point" au lieu de "description"
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
            "api": "PostService",
            "data": {
                "title": titre,
                "descriptions": description,
                "points": point, // Ajout du point
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
        fetch("http://localhost/cotechcom_api/index.php/PostService", settings)
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


function UpdateServices(id) {
    console.log(id); // Message de débogage
    tinymce.triggerSave();
    // Récupération des valeurs du formulaire
    var titre = document.getElementById('titre').value || null;
    var description = document.getElementById('description').value || null;
    var point = document.getElementById('point').value || null;
    var imageInput = document.getElementById('imageInput1');
    var image = imageInput.files[0];

    // Préparation des données à envoyer
    var data = {
        "api": "UpdateServices",
        "data": {
            "id_service": id,
            "title": titre,
            "descriptions": description,
            "points": point
        }
    };

    // Fonction pour envoyer la requête après avoir lu l'image (si présente)
    function sendData() {
        var jsonData = JSON.stringify(data);

        console.log('Données à envoyer:', jsonData); // Message de débogage

        // Paramètres de la requête
        var settings = {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: jsonData
        };

        // Exécution de la requête avec fetch
        fetch("http://localhost/cotechcom_api/index.php/UpdateServices", settings)
        .then(response => response.text()) // Utilisez text() au lieu de json() pour afficher la réponse brute
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
    }

    // Si une image est sélectionnée, la lire et l'ajouter aux données
    if (image) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var imageUrl = e.target.result;
            data.data.images = imageUrl; // Ajouter l'image aux données
            sendData(); // Envoyer les données après lecture de l'image
        };
        reader.readAsDataURL(image);
    } else {
        sendData(); // Envoyer les données sans image
    }
}

