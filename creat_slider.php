<?php 
include('include/header.php')
?>
<span class="p5"></span>
<div class="header_page block table flex space no_pag">
    <div class="tilte_page">
        <h1>Créer Banniere</h1>
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
            <label for="titre">Titre</label><br>
            <input type="text" id="titre" name="titre" placeholder="Titre">
        </div>
        <div class="input">
            <label for="description">description</label>
            <textarea id="description" name="description" placeholder="....." style="height:200px"></textarea>
        </div>
    </div>
    <br><br>
    <div>
        <button onclick="PostSlider()" class="btns button">Créer</button> 
    </div>
</div>

<script src="js/create_slider.js"></script>

<?php 
include('include/footer.php')
?>
