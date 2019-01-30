  <!-- INCLUDE DU HEAD + SPECIFICITEES A LA PAGE -->
  <?php include_once('parts/head.php'); ?>
  <link rel="stylesheet" href="styles/produits.css">
  <title>B3D | Châtaignier</title>
</head>

<?php include('parts/header.php'); ?>

<body>
<h1>Châtaignier</h1>
<section id="produits">
  <div>
    <h3>Usages</h3>
    <p>Moins durable dans le temps que l’acacia, le châtaignier en reste néanmoins une essence
    imputrescible grâce à sa présence d’acide tanique.<br><br>
    L’ensemble de nos produits châtaignier sont écorcés pour apporter plus d’esthétique et de propreté
    aux piquets mais surtout pour éviter de transporter des parasites sur le site de la clientèle.
    Nos piquets acacia sont fendus ou planés et une pointe carrée d’une surface comprise entre 1 et 1,5
    cm² est réalisée gros bout.<br><br>
    L’opération de fente permet au bois de conserver sa résistance mécanique et limiter les
    déformations de séchage.
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
        <h5>Grume de châtaignier</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Ch2.JPG" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Grume de châtaignier</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Ch3.JPG" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Grume de châtaignier</h5>
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
      <h3>Piquets châtaignier</h3>
      <table>
        <tr>
          <th colspan="2">Longueurs</th>
          <th>2m 00</th>
          <th>2m 30</th>
          <th>2m 50</th>
        </tr>
        <tr>
          <td rowspan="2">Périmètres fin bout</td>
          <td>24/29 cm</td>
          <td colspan="3">130 µ / palette</td>
        </tr>
        <tr>
          <td>28 cm et +</td>
          <td colspan="4">110 µ / palette</td>
        </tr>
      </table>
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
