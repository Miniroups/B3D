  <!-- INCLUDE DU HEAD + SPECIFICITEES A LA PAGE -->
  <?php require('langue/langue.php') ?>
  <?php include_once('parts/head.php'); ?>
  <link rel="stylesheet" href="styles/index.css">
  <title><?= $_SESSION['translate']['index_title'];?></title>
</head>

<body>
  <!-- BLOC SPECIFIQUE A LA PAGE -->
  <section id="chooseLanguage">
    <img src="images/logo.png" alt="logo_B3D">
    <ul>
      <li><a href="societe.php?lang=french">Français</a></li>
      <li><a href="societe.php?lang=english">English</a></li>
      <li><a href="societe.php?lang=spanish">Español</a></li>
      <li><a href="societe.php?lang=germany">Deutsch</a></li>
    </ul>
  </section>

  <!-- INCLUDE DU FOOTER -->
  <?php include_once('parts/footer.php'); ?>
</body>

</html>
