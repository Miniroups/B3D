  <!-- INCLUDE DU HEAD + SPECIFICITEES A LA PAGE -->
  <?php include_once('parts/head.php'); ?>
  <link rel="stylesheet" href="styles/mentions.css">
  <title><?= $_SESSION['translate']['mentions_title']?></title>
</head>

<body>
  <!-- INCLUDE DU HEADER -->
  <?php include('parts/header.php'); ?>
  <!-- BLOC SPECIFIQUE A LA PAGE -->
  <section id="mentions">
    <h1><?= $_SESSION['translate']['mentions_h1']?></h1>

    <p><?= $_SESSION['translate']['mentions_p']?></p>


    <h2><?= $_SESSION['translate']['mentions_legals']?></h2>
    <p><?= $_SESSION['translate']['mentions_legals_p']?></p>


    <h2><?= $_SESSION['translate']['mentions_privacy']?></h2>

    <p><?= $_SESSION['translate']['mentions_privacy_p_1']?></p>
    <ul><?= $_SESSION['translate']['mentions_privacy_li_1']?></ul>
    <p><?= $_SESSION['translate']['mentions_privacy_p_2']?></p>
    <p><?= $_SESSION['translate']['mentions_privacy_p_3']?></p>
    <ul><?= $_SESSION['translate']['mentions_privacy_li_2']?></ul>

    <!-- <p>Icon made by Freepik from www.flaticon.com</p> -->
  </section>

  <!-- INCLUDE DE LA SECTION CONTACT -->
  <?php include_once('parts/section-contact.php'); ?>
  <!-- INCLUDE DU FOOTER -->
  <?php include_once('parts/footer.php'); ?>
</body>

</html>
