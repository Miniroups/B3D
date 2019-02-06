<?php require('parts/head.php'); ?>

<link href="styles/plan-du-site.css" rel="stylesheet">

<title><?= $LG['plan_site_title'] ?></title>
</head>
<body>
  
<?php require('parts/header.php'); ?>

<section id="planDuSite">
  <h1><?= $LG['plan_site_h1'] ?></h1>
  <ul>
    <li><a href="societe.php"><?= $LG['plan_site_society'] ?></a></li>
    <hr>
    <p><?= $LG['plan_site_products'] ?></p>
    <li><a href="acacia.php"><?= $LG['plan_site_products_acacia'] ?></a></li>
    <li><a href="pin.php"><?= $LG['plan_site_products_pin'] ?></a></li>
    <li><a href="chataignier.php"><?= $LG['plan_site_products_chesnut'] ?></a></li>
    <li><a href="bois-de-chauffe.php"><?= $LG['plan_site_products_wood'] ?></a></li>
    <hr>
    <li><a href="contact.php"><?= $LG['plan_site_contact'] ?></a></li>
    <li><a href="mentions.php"><?= $LG['plan_site_mentions'] ?></a></li>
    <li><a href="plan-du-site.php"><?= $LG['plan_site_plan_site'] ?></a></li>
  </ul>
</section>

 <?php require('parts/footer.php'); ?>
</body>
</html>
