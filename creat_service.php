<?php 
include('include/header.php')
?>
<span class="p2"></span>
<div class="header_page block table flex space no_pag">
    <div class="tilte_page">
        <h1>Créer un service</h1>
    </div>
    <!-- <div class="numbe_page b_deg center">
        <h1 class="col_w" >12</h1>
    </div> -->
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

        <div class="input">
            <label for="titre">Last Name</label><br>
            <input type="text" id="titre" name="titre" placeholder="Your last name..">
        </div>
        <div class="input">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="textarea">
                Welcome to TinyMCE!
            </textarea>
        </div>
        <div class="input">
            <label for="point">Points</label>
            <textarea id="point" name="point" placeholder="....." style="height:200px"></textarea>
        </div>
    </div>
    <br><br>
    <div>
        <button onclick="PostService(event)" class="btns button">Créer</button> 
    </div>
</div>

<script src="js/create_service.js"></script> <!-- Charger le script ici -->

<script src="https://cdn.tiny.cloud/1/nci7i6816i5ryttwbkh3ji5mzwdk8guo4rkz8t9yobfy8cuy/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
   tinymce.init({
     selector: '.textarea',
     plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
     toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
   });
</script>


<?php 
include('include/footer.php')
?>
