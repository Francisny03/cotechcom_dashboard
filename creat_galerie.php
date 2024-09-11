<?php 
include('include/header.php')
?>
<span class="p4"></span>
<div class="header_page block table flex space no_pag">
    <div class="tilte_page">
        <h1>Créer Galerie</h1>
    </div>
   
</div>

<br><br>
<div class="block_m table">
    <div class="forms">
    <div class="icon-wrapper" id="uploadIcon1">
            <div class="imageviw">
                <img class="imagep" id="imagePreview1" src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8fDA%3D">
            </div>
        </div>

        <input type="file" name="profile_image" id="imageInput1" accept="image/*">

        <input type="file" name="imagess" id="imagess" multiple="multiple">

        <div class="input">
            <label for="titre">Titre</label><br>
            <input type="text" id="titre" name="titre" placeholder="Titre">
        </div>
        <div class="input">
            <label for="description">description</label>
            <textarea id="description" name="description" placeholder="....." style="height:200px"></textarea>
        </div>
        <div class="input">
            <label for="date">date:</label>
            <input type="date" id="date" name="date" value="2022-01-01"  />
        </div>
    </div>
    <br><br>
    <div>
    <button id="submitButton" type="button" onclick="Postgalerie()">Soumettre</button>
    <div id="loadingIndicator" style="display: none;">Chargement...</div>
    </div>
</div>
<script src="js/create_galerie.js"></script>

<?php 
include('include/footer.php')
?>
