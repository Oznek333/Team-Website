<?php

require 'db.php';

$titel = $_GET['titel'];
$titel = str_replace('-', ' ', $titel);

$stmt = $db->query("SELECT * FROM blog WHERE titel = '$titel'");

$row = $stmt->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Codebytim - <?= $row['titel']; ?>">
    <meta name="description" content="<?= $row['tijd']; ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="css/hover-min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>Codebytim - <?= $row['titel']; ?></title>
</head>
<body>
    <?php require 'navbar.php'; ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-6 animate__animated animate__fadeInUp">
            <h3 class="mt-2 d-block d-sm-none"><?= $row['titel']; ?></h3>
            <span class="d-block d-sm-none">Laatst geüpdate: <?= $row['tijd']; ?></span>
                <img style="width: 100%;" class="rounded mt-2" src="<?= $row['thumbnail']; ?>">
                <div class="row mt-4 mb-2">
                    <?php
                    if($row['mini_thumbnail_1'] > 1) {
                    ?>
                    
                    <div class="col-6">
                        <img style="height: 150px; object-fit: cover;" class="rounded w-100" src="<?= $row['mini_thumbnail_1']; ?>">
                    </div>
                    
                    <?php
                    } if($row['mini_thumbnail_2'] > 1) {
                    ?>
                    <div class="col-6">
                        <img style="height: 150px; object-fit: cover;" class="rounded w-100" src="<?= $row['mini_thumbnail_2']; ?>">
                    </div>
                    <?php
                    }
                    ?>
                </div>
                
            </div>
            <div class="col-sm-6 animate__animated animate__fadeInUp">
                <span class="d-none d-sm-block span">Laatst geüpdate: <?= $row['tijd']; ?></span>  
                <h3 class="mt-2 d-none d-sm-block"><?= $row['titel']; ?></h3>
                <p class="mt-2"><?= nl2br($row['bericht']); ?></p>
                <span>Bron: <?= $row['thumbnail_bron']; ?></span>
            </div>
        </div>
    </div>
    <?php require 'footer.php'; ?>
</body>
</html>