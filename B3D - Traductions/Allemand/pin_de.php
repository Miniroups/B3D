  <!-- INCLUDE DU HEAD + SPECIFICITEES A LA PAGE -->
  <?php include_once('parts/head.php'); ?>
  <link rel="stylesheet" href="styles/produits.css">
  <title>B3D | Kiefer</title>
</head>

<?php include('parts/header.php'); ?>

<body>
<h1>Kiefer</h1>
<section id="produits">
  <div>
    <h3>Anwendungen</h3>
    <p>
    Unsere Stifte und Stifte sind flach und eine quadratische Spitze mit einer Fläche zwischen 1 und 1,5 cm² ist ein großes Ende.<br><br>
    Die Qualität unseres Holzes entspricht den Anforderungen der Norm NF B 50-100-3 für eine Klasse IV-Verwendung, nachdem es einer Autoklavenbehandlung im Vakuum-Bethell-Verfahren und einem Druck von 12 bar in einer CTB B + -zertifizierten Station unterzogen wurde.<br><br>
    Der Anteil des Kernholzes in unseren Kiefern ist gering, so dass ein optimales Konservierungsmittel eindringen und aufbewahrt werden kann, um die Lebensdauer unserer Pfähle und Stöcke zu erhöhen.
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
      <h3>Weinpickets</h3>
      <table >
      	<tbody>
      		<tr>
      			<td colspan="2">Längen</td>
      			<td>2m 00</td>
      			<td>2m 30</td>
      			<td>2m 50</td>
      		</tr>
      		<tr>
      			<td rowspan="3"><span class="verticalCells">Durchmesser Ende Ende</span></td>
      			<td>7/10 cm</td>
      			<td colspan="3">80 µ / Holzpalette</td>
      		</tr>
      		<tr>
      			<td>10/12 cm</td>
      			<td colspan="3">72 µ / Holzpalette</td>
      		</tr>
      		<tr>
      			<td>12/14 cm</td>
      			<td colspan="3">56 µ / Holzpalette</td>
      		</tr>
      	</tbody>
      </table>
    </div>

    <div>
      <h3>Baumpfosten</h3>
      <table>
      	<tbody>
      		<tr>
      			<td colspan="2">Längen</td>
      			<td>2m 50</td>
      			<td>2m 80</td>
      			<td>3m 00</td>
      			<td>3m 50</td>
      			<td>4m 00</td>
      			<td>4m 50</td>
      			<td>5m 00</td>
      		</tr>
      		<tr>
      			<td rowspan="4"><span class="verticalCells">Durchmesser feines Ende</span></td>
      			<td>7/10 cm</td>
      			<td colspan="3">80 µ / Holzpalette</td>
      			<td colspan="4">-</td>
      		</tr>
      		<tr>
      			<td>10/12 cm</td>
      			<td colspan="4">72 µ / Holzpalette</td>
      			<td colspan="3">64 µ / Holzpalette</td>
      		</tr>
      		<tr>
            <td>12/14 cm</td>
      			<td colspan="4">56 µ / Holzpalette</td>
      			<td colspan="3">48 µ / Holzpalette</td>
      		</tr>
      		<tr>
            <td>14/16 cm</td>
      			<td colspan="4">42 µ / Holzpalette</td>
      			<td colspan="3">36 µ / Holzpalette</td>
      		</tr>
      	</tbody>
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
