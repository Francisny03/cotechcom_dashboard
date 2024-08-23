<?php 
include('env.php');
include('function/function.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.bootstrap5.css">

    
    <link rel="stylesheet" href="scss/style.scss?<?= rand() ?>">
    <title>dash</title>
</head>

<body>
    
<div class="menu_bar">
    <br>
    <div class="menu_logo">
        <img src="image/logo.png" alt="">
    </div>
    <br><br>

    <div class="liens">
        <div class="lien p1"><a href="index.php">Accueil</a></div>
        <div class="lien p2"><a href="service.php">Services</a></div>
        <div class="lien p3"><a href="about.php">à propos</a></div>
        <div class="lien p4"><a href="galerie.php">Galerie</a></div>
        <div class="lien p5"><a href="slider.php">Banniere</a></div>
        <div class="lien p6"><a href="partenaire.php">partenaire</a></div>
    </div>
</div>

<div class="main">
<br>
