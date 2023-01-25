<?php

require 'db.php';

$stmt = $db->query("SELECT * FROM blog");
$row = $stmt->fetchAll();

$searching = '';
if(!empty($_POST['search']['keyword'])) {
    $searching = $_POST['search']['keyword'];
}

$search_query = "SELECT * FROM  blog WHERE titel LIKE :keyword";

$query = $search_query;
$pdo_stmt = $db->prepare($query);
$pdo_stmt->bindValue(':keyword', '%' . $searching . '%', PDO::PARAM_STR);
$pdo_stmt->execute();
$result = $pdo_stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="css/hover-min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>Projects</title>
</head>
<body>
    <?php require 'navbar.php'; ?>
    <div class="container mt-3">
        <div class="d-block d-sm-none mb-4">
            <form name="frmSearch" method="post" action="">
                <div class="search__container w-100">
                    <input id="search" class="search__input" type="text" name="search[keyword]" placeholder="Zoek...">
                </div>
            </form>
        </div>
        <div class="row text-white">
            <?php
                foreach ($result as $blog) {
                    $urltitel = str_replace(' ', '-', $blog['titel']);
            ?>
            <div id="display" class="col-sm-4 animate__animated animate__fadeInUp mb-5">
            <a href="<?= $urltitel; ?>"><div class="img-hover-zoom hover-shadow"><img style="height: 200px; object-fit: cover;" class="rounded w-100 " src="<?= $blog['thumbnail']; ?>" alt="" srcset=""></div></a>
                <h4 class="mt-3"><?= $blog['titel']; ?></h4>
                <span class="span">Laatst geüpdate: <?= $blog['tijd']; ?></span>  
               </div>
            <?php
                }
            ?>
        </div>
    </div>
    <?php require 'footer.php'; ?>
</body>
</html>