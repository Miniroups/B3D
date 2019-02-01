  <!-- INCLUDE DU HEAD + SPECIFICITEES A LA PAGE -->
  <?php include_once('parts/head.php'); ?>
  <link rel="stylesheet" href="styles/societe.css">
  <title><?= $_SESSION['translate']['society_title'];?></title>
</head>

<body>
  <!-- INCLUDE DU HEADER -->
  <?php include('parts/header.php'); ?>
  <!-- BLOC SPECIFIQUE A LA PAGE -->
  <section class="coeur">
    <div id="encart1" class="encart">
      <h3><?= $_SESSION['translate']['society_hist_title'];?></h3>
      <p><?= $_SESSION['translate']['society_hist_p'];?></p>
    </div>
    <div id="encart2" class="invert-encart">
      <h3><?= $_SESSION['translate']['society_sav_title'];?></h3>
      <p><?= $_SESSION['translate']['society_sav_p'];?></p>
    </div>
    <div id="encart3" class="encart">
      <h3><?= $_SESSION['translate']['society_products_title'];?></h3>
      <p><?= $_SESSION['translate']['society_products_p'];?></p>
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
