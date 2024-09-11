<?php 
include('include/header.php');
$id = $_GET['id_service'];
$api_url = $apiurl . 'Services/' . $id;
$result = fetchDataFromApi($api_url);
?>

<span class="p2"></span>
<div class="header_page block table flex space no_pag">
    <div class="tilte_page">
        <h1><?php echo $result['id_services'] ?></h1>
    </div>
</div>
<br><br>

<div class="block_m table">
    <div class="forms">
        <div class="icon-wrapper" id="uploadIcon1">
            <div class="imageviw">
                <img class="imagep" id="imagePreview1" src="<?php echo $result['image'] ?>">
            </div>
        </div>

        <input type="file" name="profile_image" id="imageInput1" accept="image/*">

        <div class="input">
            <label for="titre">Titre</label><br>
            <input type="text" id="titre" name="titre" placeholder="Your last name.." value="<?php echo $result['title'] ?>">
        </div>
        <div class="input">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="textarea"><?php echo $result['description'] ?></textarea>
        </div>
        <div class="input">
            <label for="point">Points</label>
            <textarea id="point" name="point" placeholder="....." style="height:200px"><?php echo $result['points'] ?></textarea>
        </div>
    </div>
    <br><br>
    <div>
        <button onclick="UpdateServices('<?php echo $result['id_services'] ?>')" class="btns button">Créer</button> 
    </div>
</div>

<script src="js/create_service.js"></script>

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
