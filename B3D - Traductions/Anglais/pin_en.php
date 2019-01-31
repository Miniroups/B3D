  <!-- INCLUDE DU HEAD + SPECIFICITEES A LA PAGE -->
  <?php include_once('parts/head.php'); ?>
  <link rel="stylesheet" href="styles/produits.css">
  <title>B3D | Pine</title>
</head>

<?php include('parts/header.php'); ?>

<body>
<h1>Pine</h1>
<section id="produits">
  <div>
    <h3>Uses</h3>
    <p>
    Our pins and poles pins are flat and a square tip of a surface between 0,115 and 0,2325 square inch is made big end.<br><br>
    The quality of our wood conforms to the specifications of standard NF B 50-100-3 for a class of class IV use after having undergone an autoclave treatment using the vacuum Bethell process and pressure of 12 bars in a CTB B + certified station.<br><br>
    The proportion of heartwood present in our pines is low which allows penetration and retention of optimum preservative for increased longevity of our stakes and poles.
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
      <h3>Wine pickets</h3>
      <table >
      	<tbody>
      		<tr>
      			<td colspan="2">lengths</td>
      			<td>78,74 </br>Inch</td>
      			<td>90,55 </br>Inch</td>
      			<td>98,42 </br>Inch</td>
      		</tr>
      		<tr>
      			<td rowspan="3"><span class="verticalCells">diameter end</span></td>
      			<td>2,76/3,15 </br>Inch</td>
      			<td colspan="3">80 µ / pallets</td>
      		</tr>
      		<tr>
      			<td>3,15/4,72 </br>Inch</td>
      			<td colspan="3">72 µ / pallets</td>
      		</tr>
      		<tr>
      			<td>4,72/5,51 </br>Inch</td>
      			<td colspan="3">56 µ / pallets</td>
      		</tr>
      	</tbody>
      </table>
    </div>

    <div>
      <h3>Tree poles</h3>
      <table>
      	<tbody>
      		<tr>
      			<td colspan="2">lengths</td>
      			<td>90,55 Inch</td>
      			<td>110,24 Inch</td>
      			<td>118,11 Inch</td>
      			<td>137,79 Inch</td>
      			<td>157,48 Inch</td>
      			<td>177,16 Inch</td>
      			<td>196,85 Inch</td>
      		</tr>
      		<tr>
      			<td rowspan="4"><span class="verticalCells">Diamètres fin bout</span></td>
      			<td>2,76/3,15 Inch</td>
      			<td colspan="3">80 µ / pallets</td>
      			<td colspan="4">-</td>
      		</tr>
      		<tr>
      			<td>3,15/4,72 Inch</td>
      			<td colspan="4">72 µ / pallets</td>
      			<td colspan="3">64 µ / pallets</td>
      		</tr>
      		<tr>
            <td>4,72/5,51 Inch</td>
      			<td colspan="4">56 µ / pallets</td>
      			<td colspan="3">48 µ / pallets</td>
      		</tr>
      		<tr>
            <td>5,51/6,30 Inch</td>
      			<td colspan="4">42 µ / pallets</td>
      			<td colspan="3">36 µ / pallets</td>
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
