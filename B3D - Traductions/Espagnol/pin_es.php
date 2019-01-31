  <!-- INCLUDE DU HEAD + SPECIFICITEES A LA PAGE -->
  <?php include_once('parts/head.php'); ?>
  <link rel="stylesheet" href="styles/produits.css">
  <title>B3D | Pino</title>
</head>

<?php include('parts/header.php'); ?>

<body>
<h1>Pino</h1>
<section id="produits">
  <div>
    <h3>Usos</h3>
    <p>
    Nuestros pines y polos son planos y la punta cuadrada de una superficie entre 1 y 1,5 cm² se hace grande.<br><br>
    La calidad de nuestra madera cumple con las especificaciones de la norma NF B 50-100-3 para un uso de clase IV después de haber sido sometida a un tratamiento de autoclave utilizando el proceso de vacío Bethell y una presión de 12 bares en una estación certificada por CTB B +.<br><br>
    La proporción de duramen presente en nuestros pinos es baja, lo que permite la penetración y retención del conservante óptimo para aumentar la longevidad de nuestras estacas y postes.
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
      <h3>Estacas de vino</h3>
      <table >
      	<tbody>
      		<tr>
      			<td colspan="2">Longitudes</td>
      			<td>2m 00</td>
      			<td>2m 30</td>
      			<td>2m 50</td>
      		</tr>
      		<tr>
      			<td rowspan="3"><span class="verticalCells">Diámetro extremo</span></td>
      			<td>7/10 cm</td>
      			<td colspan="3">80 µ / paleta</td>
      		</tr>
      		<tr>
      			<td>10/12 cm</td>
      			<td colspan="3">72 µ / paleta</td>
      		</tr>
      		<tr>
      			<td>12/14 cm</td>
      			<td colspan="3">56 µ / paleta</td>
      		</tr>
      	</tbody>
      </table>
    </div>

    <div>
      <h3>Estacas de arbol</h3>
      <table>
      	<tbody>
      		<tr>
      			<td colspan="2">Longitudes</td>
      			<td>2m 50</td>
      			<td>2m 80</td>
      			<td>3m 00</td>
      			<td>3m 50</td>
      			<td>4m 00</td>
      			<td>4m 50</td>
      			<td>5m 00</td>
      		</tr>
      		<tr>
      			<td rowspan="4"><span class="verticalCells">Diámetro extremo</span></td>
      			<td>7/10 cm</td>
      			<td colspan="3">80 µ / paleta</td>
      			<td colspan="4">-</td>
      		</tr>
      		<tr>
      			<td>10/12 cm</td>
      			<td colspan="4">72 µ / paleta</td>
      			<td colspan="3">64 µ / paleta</td>
      		</tr>
      		<tr>
            <td>12/14 cm</td>
      			<td colspan="4">56 µ / paleta</td>
      			<td colspan="3">48 µ / paleta</td>
      		</tr>
      		<tr>
            <td>14/16 cm</td>
      			<td colspan="4">42 µ / paleta</td>
      			<td colspan="3">36 µ / paleta</td>
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
