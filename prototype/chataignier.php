  <!-- INCLUDE DU HEAD + SPECIFICITEES A LA PAGE -->
  <?php include_once('parts/head.php'); ?>
  <link rel="stylesheet" href="styles/produits.css">
  <title><?= $_SESSION['translate']['chataigner_title']?></title>
</head>

<?php include('parts/header.php'); ?>

<body>
<h1><?= $_SESSION['translate']['chataigner_h1']?></h1>
<section id="produits">
  <div>
    <h3><?= $_SESSION['translate']['chataigner_use']?></h3>
    <p><?= $_SESSION['translate']['chataigner_use_p']?>
    </p>
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
      <img class="d-block w-100" src="images/Ch1.JPG" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5><?= $_SESSION['translate']['chataigner_carousel_1']?></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Ch2.JPG" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5><?= $_SESSION['translate']['chataigner_carousel_2']?></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Ch3.JPG" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5><?= $_SESSION['translate']['chataigner_carousel_3']?></h5>
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
      <h3><?= $_SESSION['translate']['chataigner_table_1_title']?></h3>
      <?= $_SESSION['translate']['chataigner_table_1_content']?>
    </div>

  </section>

  <!-- INCLUDE DE LA SECTION CONTACT -->
  <?php include_once('parts/section-contact.php'); ?>
  <!-- INCLUDE DU MODAL -->
  <?php include_once('parts/modal.php'); ?>
  <!-- INCLUDE DU FOOTER -->
  <?php include_once('parts/footer.php'); ?>
</body>

</html>