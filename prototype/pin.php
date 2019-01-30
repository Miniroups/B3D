  <!-- INCLUDE DU HEAD + SPECIFICITEES A LA PAGE -->
  <?php include_once('parts/head.php'); ?>
  <link rel="stylesheet" href="styles/produits.css">
  <title>B3D | Pin</title>
</head>

<?php include('parts/header.php'); ?>

<body>
<h1>Pin</h1>
<section id="produits">
  <div>
    <h3>Usages</h3>
    <p>
    Nos piquets et poteaux pins sont planés et une pointe carrée d’une surface comprise entre 1 et 1,5 cm² est réalisée gros bout.<br><br>
    La qualité de nos bois est conforme aux spécifications de la norme NF B 50-100-3 pour une classe d’emploi classe IV après avoir subi un traitement en autoclave suivant le procédé Bethell vide et pression 12 bars dans une station certifiée CTB B+.<br><br>
    La proportion de bois de cœur présente dans nos pins est faible ce qui permet une pénétration et une rétention de produit de préservation optimum pour longévité accrue de nos piquets et poteaux.
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
      <h3>Piquets viticoles</h3>
      <table >
      	<tbody>
      		<tr>
      			<td colspan="2">Longueurs</td>
      			<td>2m 00</td>
      			<td>2m 30</td>
      			<td>2m 50</td>
      		</tr>
      		<tr>
      			<td rowspan="3"><span class="verticalCells">Diamètres fin bout</span></td>
      			<td>7/10 cm</td>
      			<td colspan="3">80 µ / palettes</td>
      		</tr>
      		<tr>
      			<td>10/12 cm</td>
      			<td colspan="3">72 µ / palettes</td>
      		</tr>
      		<tr>
      			<td>12/14 cm</td>
      			<td colspan="3">56 µ / palettes</td>
      		</tr>
      	</tbody>
      </table>
    </div>

    <div>
      <h3>Poteaux arboricoles</h3>
      <table>
      	<tbody>
      		<tr>
      			<td colspan="2">Longueurs</td>
      			<td>2m 50</td>
      			<td>2m 80</td>
      			<td>3m 00</td>
      			<td>3m 50</td>
      			<td>4m 00</td>
      			<td>4m 50</td>
      			<td>5m 00</td>
      		</tr>
      		<tr>
      			<td rowspan="4"><span class="verticalCells">Diamètres fin bout</span></td>
      			<td>7/10 cm</td>
      			<td colspan="3">80 µ / palettes</td>
      			<td colspan="4">-</td>
      		</tr>
      		<tr>
      			<td>10/12 cm</td>
      			<td colspan="4">72 µ / palettes</td>
      			<td colspan="3">64 µ / palettes</td>
      		</tr>
      		<tr>
            <td>12/14 cm</td>
      			<td colspan="4">56 µ / palettes</td>
      			<td colspan="3">48 µ / palettes</td>
      		</tr>
      		<tr>
            <td>14/16 cm</td>
      			<td colspan="4">42 µ / palettes</td>
      			<td colspan="3">36 µ / palettes</td>
      		</tr>
      	</tbody>
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
