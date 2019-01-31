  <!-- INCLUDE DU HEAD + SPECIFICITEES A LA PAGE -->
  <?php include_once('parts/head.php'); ?>
  <link rel="stylesheet" href="styles/produits.css">
  <title>B3D | Akazie</title>
</head>

<?php include('parts/header.php'); ?>

<body>
<h1>Akazie</h1>
<section id="produits">
  <div>
    <h3>Anwendungen</h3>
    <p>Alle unsere Akazienprodukte werden entrindet, um den Pfählen mehr Ästhetik und Sauberkeit zu bieten, vor allem aber den Transport von Parasiten wie xylophagous Insekten auf dem Gelände der Kundschaft zu vermeiden. <br> <br> Unsere Akazienpfähle sind gespalten oder abgeflacht, und ein quadratischer Punkt einer Fläche zwischen 1 und 1,5 cm² wird zu einem großen Ende gemacht. <br> Durch den Schlitzbetrieb kann das Holz seine mechanische Festigkeit beibehalten und die Verformung des Trocknens begrenzen. </p>
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
      <img class="d-block w-100" src="images/Ac1.JPG" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Title 1</h5>
        <p>Caption 1</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Ac2.JPG" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Title 2</h5>
        <p>Caption 2</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Ac3.JPG" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Title 3</h5>
        <p>Caption 3</p>
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
      <h3>Split-Einsätze</h3>
      <table>
        <tr>
          <th colspan="2">Längen</th>
          <th>1m 40</th>
          <th>1m 80</th>
          <th>2m 00</th>
          <th>2m 30</th>
          <th>2m 50</th>
        </tr>
        <tr>
          <td rowspan="4">Umfang Ende</td>
          <td>19/23 cm</td>
          <td colspan="3">160 µ / Holzpalette</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>23/26 cm</td>
          <td colspan="4">150 µ / Holzpalette</td>
          <td>-</td>
        </tr>
        <tr>
          <td>26/29 cm</td>
          <td colspan="5">130 µ / Holzpalette</td>
        </tr>
        <tr>
          <td>29 cm und mehr</td>
          <td>-</td>
          <td colspan="4">110 µ / Holzpalette</td>
        </tr>
      </table>
    </div>
    <div>
      <h3>runde Einsätze</h3>
      <table>
        <tr>
          <th colspan="2">Längen</th>
          <th>1m 80</th>
          <th>2m 00</th>
          <th>2m 30</th>
          <th>2m 50</th>
          <th>3m 00</th>
          <th>4m 00</th>
        </tr>
        <tr>
          <td rowspan="4">Feine Enddurchmesser</td>
          <td>6/8 cm</td>
          <td colspan="3">80 µ / Holzpalette</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>8/10 cm</td>
          <td colspan="4">71 µ / Holzpalette</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>10/12 cm</td>
          <td colspan="6">56 µ / Holzpalette</td>
        </tr>
        <tr>
          <td>12/15 cm</td>
          <td colspan="6">42 µ / Holzpalette</td>
        </tr>
      </table>


    </div>
  </section>


  <!-- INCLUDE DE LA SECTION CONTACT -->
  <?php include_once('parts/section-contact.php'); ?>
  <!-- INCLUDE DU FOOTER -->
  <?php include_once('parts/footer.php'); ?>
  <!-- Script -->
  <?php include_once('parts/scripts-communs.php'); ?>
</body>

</html>
