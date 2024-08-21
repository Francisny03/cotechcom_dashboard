<?php 
include('include/header.php');

$api_url = $apiurl.'services/';

// Configuration des options pour la requête HTTP
$options = [
    "http" => [
        "header" => "Accept: application/json\r\n",
        "method" => "GET"
    ]
];

// Création du contexte de la requête
$context = stream_context_create($options);

// Tentative de récupération des données depuis l'API
$data = file_get_contents($api_url, false, $context);

// Vérification si la récupération des données a échoué
if ($data === FALSE) {
    $sms = 'Erreur lors de la récupération des données depuis l\'API.';
}

// Décodage des données JSON
$result = json_decode($data, true);
?>
<span class="p2"></span>
<div class="header_page block table flex space no_pag">
    <div class="tilte_page">
        <h1>Services</h1>
    </div>
    <div class="numbe_page b_deg center">
        <h1 class="col_w" >12</h1>
    </div>
</div>

<br><br>

<div class="block table">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Details</th>
                <th>Plus</th>
            </tr>
        </thead>
        <tbody>

            <?php  foreach ($result as $service) { ?>
            <tr>
                <td><?php echo $service['id_services'] ?> </td>
                <td><?php echo $service['title'] ?></td>
                <td><?php echo $service['description'] ?></td>
                <td><a href="" class="button">voir plus</a></td>
            </tr>
            <?php  } ?>
        </tbody>
        <tfoot>
            <tr>
            <th>Id</th>
                <th>Nom</th>
                <th>details</th>
                <th>plus</th>
            </tr>
        </tfoot>
    </table>
    <br>
        <div class="btns"><a href="creat_service.php" class="button">créer</a></div>
    <br>
</div>

<?php 
include('include/footer.php')
?>
