<?php require('parts/head.php'); ?>

<link href="styles/index.css" rel="stylesheet">

<title><?= $LG['index_title'] ?></title>
</head>
<body>
<section id="chooseLanguage">
  <img src="images/logo.png" alt="logo_B3D">
  <ul>
    <li><a href="societe.php?lg=fr">Français</a></li>
    <li><a href="societe.php?lg=en">English</a></li>
    <li><a href="societe.php?lg=es">Español</a></li>
    <li><a href="societe.php?lg=de">Deutsch</a></li>
  </ul>
</section>

<?php require('parts/footer.php'); ?>
</body>
</html>
