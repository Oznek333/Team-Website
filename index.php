<?php

require 'db.php';
$stmt = $db->query("SELECT * FROM team LIMIT 1");

$row = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="title" content="Codebytim">
      <meta name="description" content="Front-end & Back-end development service.">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet"/>
      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <link href="css/hover-min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/main.css">
      <link rel="icon" type="image/png" href="assets/images/logo.png">
      <title>Codebytim</title>
   </head>
   <body>
      <?php require 'navbar.php'; ?>
      <div class="wrapper">
         <div class="container animate__animated animate__fadeIn">
            <div class="row d-flex align-items-center index" style="height: 50vh;">
               <div class="col-sm-12 text-center">
                  <?php
                     // stukje tijd--------------------------------
                     $welcome_string="Welcome!";
                     $numeric_date=date("h");
                     
                     //De tijd 
                     if($numeric_date>=0&&$numeric_date<=11)
                     $welcome_string="Goedemorgen!";
                     else if($numeric_date>=12&&$numeric_date<=17)
                     $welcome_string="Goedemiddag!";
                     else if($numeric_date>=18&&$numeric_date<=23)
                     $welcome_string="Goede avond!";
                     //Laat groet zien
                     ?>
                  <h1 class="fw-bold mt-5"><?= $welcome_string; ?></h1>
               </div>
            </div>
            <div class="row d-flex align-items-center mt-5 mb-5 pt-5 pb-5">
               <div class="col-sm-6 text-center">
                  <img class="rounded-pill logo" src="assets/images/logo.png" style="width: 30%;" alt="">
               </div>
               <div class="col-sm-6 text-center text-sm-start">
                  <h1 class="fw-bold">Weekaa project</h1>
                  <p></p>
                  <a class="btn hvr-grow" href="weekaa">More...</a>
               </div>
            </div>
            
<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>
  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <?php
                foreach ($row as $team) {
    ?>
    <div class="carousel-item active">
      <img src="<?= $team['image']; ?>" class="d-block w-100" alt="Sunset Over the City"/>
      <div class="carousel-caption d-none d-md-block">
        <h5><?= $team['name']; ?></h5>
        <p><?= $team['description']; ?></p>
      </div>
    </div>
    <?php
    }
    ?>

  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->

            <div class="row text-center pt-5 pb-5">
               <section class="text-center">
                  <h1 class="mb-4 animate__animated animate__fadeIn"><strong>Used</strong></h1>
               </section>
               <div class="col-sm-3">
                  <i style="font-size: 100px;" class="fa-brands fa-php color"></i>
                  <p>Hypertext Preprocessor</p>
               </div>
               <div class="col-sm-3">
                  <i style="font-size: 100px;" class="fa-brands fa-js color"></i>
                  <p>JavaScript</p>
               </div>
               <div class="col-sm-3">
                  <i style="font-size: 100px;" class="fa-solid fa-code color"></i>
                  <p>HyperText Markup Language</p>
               </div>
               <div class="col-sm-3">
                  <i style="font-size: 100px;" class="fa-brands fa-css3-alt color"></i>
                  <p>Cascading Style Sheets</p>
               </div>
            </div>
            <div class="row d-flex align-items-center">
               <div class="col-sm-12 text-center text-sm-start">
                  <h1 class="fw-bold">Web Development</h1>
                  <p>Web development is all about building and maintaining <strong>websites</strong>. These days, a <strong>strong</strong> online presence is <strong>vital</strong> for businesses of all sizes. A <strong>good</strong> website can help a company increase its <strong>visibility</strong>, reach more people, and establish its <strong>brand</strong>. It can also enhance the <strong>customer experience</strong> and allow for better interaction with potential and current customers.
                     As a web developer, I use various programming languages and technologies to bring a website to life. I create <strong>dynamic</strong> and <strong>interactive</strong> sites that can be used for e-commerce, communication, information sharing, and more. Whether you're a small business owner or running a large corporation, investing in web development can have a huge impact on your <strong>success</strong>. A <strong>well-designed</strong> website is key to establishing a strong online presence and reaching more customers.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>