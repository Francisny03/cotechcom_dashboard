function Postgalerie() {
    console.log('Formulaire soumis');

    var titre = document.getElementById('titre').value;
    var date = document.getElementById('date').value;
    var description = document.getElementById('description').value;
    var imageInput = document.getElementById('imagess');
    var coverImageInput = document.getElementById('imageInput1'); // Champ pour l'image de couverture
    var files = imageInput.files;
    var coverFile = coverImageInput.files[0];  // Récupérer l'image de couverture

    if (!titre || !description || !date || !coverFile) {
        alert('Tous les champs doivent être remplis');
        return;
    }

    if (!imageInput || files.length === 0) {
        alert('Aucune image sélectionnée');
        return;
    }

    document.getElementById('submitButton').disabled = true;
    document.getElementById('loadingIndicator').style.display = 'block';

    function readFileAsBase64(file) {
        return new Promise((resolve, reject) => {
            var reader = new FileReader();
            reader.onload = function(e) {
                resolve(e.target.result);
            };
            reader.onerror = function(e) {
                reject(e);
            };
            reader.readAsDataURL(file);
        });
    }

    Promise.all(Array.from(files).map(file => readFileAsBase64(file)))
    .then(images => readFileAsBase64(coverFile).then(coverImage => {
        // Ajout de console.log pour afficher les données envoyées
        console.log('Titre:', titre);
        console.log('Description:', description);
        console.log('Date:', date);
        console.log('Images:', images);
        console.log('Image de couverture:', coverImage);

        var data = JSON.stringify({
            "api": "PostRealisation",
            "data": {
                "title": titre,
                "descriptions": description,
                "imagess": images,
                "dates": date,
                "images": coverImage  // Inclure l'image de couverture
            }
        });

        console.log('Données envoyées:', data);

        return fetch("http://localhost/cotechcom_api/index.php/PostRealisation", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: data
        });
    }))
    .then(response => response.text())
    .then(text => {
        try {
            const data = JSON.parse(text);
            if (data.status === "success") {
                alert('Données envoyées avec succès !');
            } else {
                alert('Erreur: ' + data.message);
            }
        } catch (err) {
            console.error('La réponse n\'est pas au format JSON :', text);
            alert('Erreur : La réponse du serveur n\'est pas valide.');
        }
    })
    .catch(error => {
        alert('Erreur: ' + error.message);
        console.error('Erreur:', error);
    })
    .finally(() => {
        document.getElementById('submitButton').disabled = false;
        document.getElementById('loadingIndicator').style.display = 'none';
    });
}
