<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Link CSS -->
  <?php include_once('styles-communs.php'); ?>
  <link rel="stylesheet" href="styles/plan-du-site.css">
  <title>B3D | Plan du site</title>
</head>

<body>
  <!-- INCLUDE DU HEADER -->
  <?php include('header.php'); ?>
  <!-- BLOC SPECIFIQUE A LA PAGE -->
  <section id="planDuSite">
    <h1>Plan du site</h1>
    <ul>
      <li><a href="societe.php">Société</a></li>
      <li><a href="produits.php">Produits</a>
        <ul>
          <li><a href="produits.php">Acacia</a></li>
          <li><a href="produits.php">Pin</a></li>
          <li><a href="produits.php">Châtaigner</a</li>
            <li><a href="produits.php">Bois de chauffe</a></li>
          </ul>
      </li>
      <li><a href="contact-form.php">Contact</a></li>
      <li><a href="mentions.php">Mentions</a></li>
      <li><a href="plan-du-site.php">Plan du site</a></li>
    </ul>
  </section>
  <!-- INCLUDE DU FOOTER -->
  <?php include_once('footer.php'); ?>
  <!-- Script -->
  <?php include_once('scripts-communs.php'); ?>
</body>

</html>
