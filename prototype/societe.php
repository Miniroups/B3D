<?php require('parts/head.php'); ?>

<link href="styles/societe.css" rel="stylesheet">

<title><?= $LG['society_title'] ?></title>
</head>
<body>
  
<?php require('parts/header.php'); ?>

<section class="coeur">
  <div id="encart1" class="encart">
    <h3><?= $LG['society_hist_title'] ?></h3>
    <p><?= $LG['society_hist_p'] ?></p>
  </div>
  <div id="encart2" class="invert-encart">
    <h3><?= $LG['society_sav_title'] ?></h3>
    <p><?= $LG['society_sav_p'] ?></p>
  </div>
  <div id="encart3" class="encart">
    <h3><?= $LG['society_products_title'] ?></h3>
    <p><?= $LG['society_products_p'] ?></p>
  </div>
</section>

<?php require('parts/section-contact.php'); ?>

<?php require('parts/modal.php'); ?>

<?php require('parts/footer.php'); ?>
</body>
</html>
