	new DataTable('#example');

$(document).ready(function() {
    // Loop through each span with class starting with 'p'
    $('span[class^="p"]').each(function() {
        var spanClass = $(this).attr('class');
        // Find the corresponding menu item and replace the class with 'active'
        $('.liens .' + spanClass).addClass('active').removeClass(spanClass);
    });
});

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }


  function setupImageUpload(iconId, inputId, previewId) {
    // Écouteur d'événement pour le clic sur l'icône
    document.getElementById(iconId).addEventListener('click', function() {
        document.getElementById(inputId).click();
    });

    // Écouteur d'événement pour le changement de l'input file
    document.getElementById(inputId).addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.getElementById(previewId);
                img.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });
}

// Utilisation de la fonction avec les identifiants d'éléments spécifiques
setupImageUpload('uploadIcon1', 'imageInput1', 'imagePreview1');
setupImageUpload('uploadIcon2', 'imageInput2', 'imagePreview2');