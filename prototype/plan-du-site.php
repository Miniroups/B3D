  <!-- INCLUDE DU HEAD + SPECIFICITEES A LA PAGE -->
  <?php include_once('parts/head.php'); ?>
  <link rel="stylesheet" href="styles/plan-du-site.css">
  <title>B3D | Plan du site</title>
</head>

<body>
  <!-- INCLUDE DU HEADER -->
  <?php include('parts/header.php'); ?>
  <!-- BLOC SPECIFIQUE A LA PAGE -->
  <section id="planDuSite">
    <h1>Plan du site</h1>
    <ul>
      <li><a href="societe.php">Société</a></li>
      <li><a href="produits.php">Produits</a>
        <ul>
          <li><a href="acacia.php">Acacia</a></li>
          <li><a href="pin.php">Pin</a></li>
          <li><a href="chataigner.php">Châtaigner</a</li>
            <li><a href="bois-de-chauffe.php">Bois de chauffe</a></li>
          </ul>
      </li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="mentions.php">Mentions</a></li>
      <li><a href="plan-du-site.php">Plan du site</a></li>
    </ul>
  </section>

  <!-- INCLUDE DU FOOTER -->
  <?php include_once('parts/footer.php'); ?>
  <!-- Script -->
  <?php include_once('parts/scripts-communs.php'); ?>
</body>

</html>
