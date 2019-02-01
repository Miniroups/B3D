  <!-- INCLUDE DU HEAD + SPECIFICITEES A LA PAGE -->
  <?php include_once('parts/head.php'); ?>
  <link rel="stylesheet" href="styles/plan-du-site.css">
  <title><?= $_SESSION['translate']['plan_site_title']?></title>
</head>

<body>
  <!-- INCLUDE DU HEADER -->
  <?php include('parts/header.php'); ?>
  <!-- BLOC SPECIFIQUE A LA PAGE -->
  <section id="planDuSite">
    <h1><?= $_SESSION['translate']['plan_site_h1']?></h1>
    <ul>
      <li><a href="societe.php"><?= $_SESSION['translate']['plan_site_society']?></a></li>
      <hr>
      <p><?= $_SESSION['translate']['plan_site_products']?></p>
      <li><a href="acacia.php"><?= $_SESSION['translate']['plan_site_products_acacia']?></a></li>
      <li><a href="pin.php"><?= $_SESSION['translate']['plan_site_products_pin']?></a></li>
      <li><a href="chataignier.php"><?= $_SESSION['translate']['plan_site_products_chesnut']?></a</li>
      <li><a href="bois-de-chauffe.php"><?= $_SESSION['translate']['plan_site_products_wood']?></a></li>
      </li>
      <hr>
      <li><a href="contact.php"><?= $_SESSION['translate']['plan_site_contact']?></a></li>
      <li><a href="mentions.php"><?= $_SESSION['translate']['plan_site_mentions']?></a></li>
      <li><a href="plan-du-site.php"><?= $_SESSION['translate']['plan_site_plan_site']?></a></li>
    </ul>
  </section>

  <!-- INCLUDE DU FOOTER -->
  <?php include_once('parts/footer.php'); ?>
</body>

</html>
