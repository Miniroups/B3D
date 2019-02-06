<?php require('parts/head.php'); ?>

<link href="styles/produits.css" rel="stylesheet">

<title><?= $LG['acacia_title'] ?></title>
</head>
<body>

<?php require('parts/header.php'); ?>

<h1><?= $LG['acacia_h1'] ?></h1>
<section id="produits">
  <div>
    <h3><?= $LG['acacia_use'] ?></h3>
    <p><?= $LG['acacia_use_p'] ?></p>
  </div>
</section>
<div id="indicateurs" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#indicateurs" data-slide-to="0" class="active"></li>
    <li data-target="#indicateurs" data-slide-to="1"></li>
    <li data-target="#indicateurs" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/Ac1.JPG" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5><?= $LG['acacia_carousel_1'] ?></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Ac2.JPG" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5><?= $LG['acacia_carousel_2'] ?></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Ac3.JPG" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5><?= $LG['acacia_carousel_3'] ?></h5>
        <p></p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#indicateurs" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#indicateurs" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section id="details">
  <div>
    <h3><?= $LG['acacia_table_1_title'] ?></h3>
    <?= $LG['acacia_table_1_content'] ?>
  </div>
  <div>
    <h3><?= $LG['acacia_table_2_title'] ?></h3>
    <?= $LG['acacia_table_2_content'] ?>
  </div>
</section>

<?php require('parts/section-contact.php'); ?>

<?php require('parts/modal.php'); ?>

<?php require('parts/footer.php'); ?>
</body>
</html>
