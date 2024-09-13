<?php 
include('include/header.php');
$api_url_slider = $apiurl . 'Realisation/';
$result_slider = fetchDataFromApis($api_url_slider);

$api_url_count = $apiurl . 'CountSlider/';
$result_count = fetchDataFromApis($api_url_count);
?>
<span class="p4"></span>
<div class="header_page block table flex space no_pag">
    <div class="tilte_page">
        <h1>Realisation</h1>
    </div>
    <div class="numbe_page b_deg center">
        <h1 class="col_w" ><?php echo isset($result_count['count']) ? $result_count['count'] : '0'; ?></h1>
    </div>
</div>

<br><br>

<div class="block table">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>image</th>
                <th>tite</th>
                <th>details</th>
                <!-- <th>Plus</th> -->
            </tr>
        </thead>
        <tbody>
        <?php  foreach ($result_slider as $service) { ?>
            <tr>
                <td><?php echo $service['id_realisation'] ?></td>
                <td> <img src="<?php echo $service['images'] ?>" alt=""> </td>
                <td><?php echo $service['title'] ?></td>
                <td><?php echo $service['descriptions'] ?></td>
                <!-- <td><a href="" class="button">voir plus</a></td> -->
            </tr>
        <?php  } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>image</th>
                <th>tite</th>
                <th>details</th>
                <!-- <th>Plus</th> -->
            </tr>
        </tfoot>
    </table>
    <br>
        <div class="btns"><a href="creat_galerie.php" class="button">crée galerie</a></div>
    <br>
</div>
<?php 
include('include/footer.php')
?>
