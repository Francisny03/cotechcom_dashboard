<?php 
include('include/header.php');
$api_url = $apiurl . 'Services/';
$result = fetchDataFromApi($api_url);

$api_url_count = $apiurl . 'CountServices/';
$result_count = fetchDataFromApis($api_url_count);

?>
<span class="p2"></span>
<div class="header_page block table flex space no_pag">
    <div class="tilte_page">
        <h1>Services</h1>
    </div>
    <div class="numbe_page b_deg center">
    <h1 class="col_w" ><?php echo isset($result_count['count']) ? $result_count['count'] : 'N/A'; ?></h1>
    </div>
</div>

<br><br>

<div class="block table">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Détails</th>
                <th>Plus</th>
            </tr>
        </thead>
        <tbody>

            <?php  foreach ($result as $service) { ?>
            <tr>
                <td><?php echo $service['id_services'] ?> </td>
                <td><?php echo $service['title'] ?></td>
                <td><?php echo $service['description'] ?></td>
                <td><a href="Détails_service.php?id_service=<?php echo $service['id_services'] ?>" class="button">Voir plus</a></td>det
            </tr>
            <?php  } ?>
        </tbody>
        <tfoot>
            <tr>
            <th>Id</th>
                <th>Nom</th>
                <th>Détails</th>
                <th>plus</th>
            </tr>
        </tfoot>
    </table>
    <br>
        <div class="btns"><a href="creat_service.php" class="button">Créer un service</a></div>
    <br>
</div>

<?php 
include('include/footer.php')
?>
