  <!-- INCLUDE DU HEAD + SPECIFICITEES A LA PAGE -->
  <?php include_once('parts/head.php'); ?>
  <link rel="stylesheet" href="styles/produits.css">
  <title>B3D | Acacia</title>
</head>

<?php include('parts/header.php'); ?>

<body>
<h1>Acacia</h1>
<section id="produits">
  <div>
    <h3>Usages</h3>
    <p>L’ensemble de nos produits acacia sont écorcés pour apporter plus d’esthétique et de propreté aux piquets mais surtout pour éviter de transporter des parasites comme des insectes xylophages sur le site de la clientèle.<br><br> Nos piquets acacia sont fendus ou planés et une pointe carrée d’une surface comprise entre 1 et 1,5 cm² est réalisée gros bout.<br><br> L’opération de fente permet au bois de conserver sa résistance mécanique et limiter les déformations de séchage. </p>
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
      <h3>Piquets fendus</h3>
      <table>
        <tr>
          <th colspan="2">Longueurs</th>
          <th>1m40</th>
          <th>1m80</th>
          <th>2m</th>
          <th>2m30</th>
          <th>2m50</th>
        </tr>
        <tr>
          <td rowspan="4">Périmètres bout fin</td>
          <td>19/23cm</td>
          <td colspan="3">160 unités par palette</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>23/26cm</td>
          <td colspan="4">150 unités par palette</td>
          <td>-</td>
        </tr>
        <tr>
          <td>26/29cm</td>
          <td colspan="5">130 unités par palette</td>
        </tr>
        <tr>
          <td>29cm et plus</td>
          <td>-</td>
          <td colspan="4">110 unités par palette</td>
        </tr>
      </table>
    </div>
    <div>
      <h3>Piquets ronds</h3>
      <table>
        <tr>
          <th colspan="2">Longueurs</th>
          <th>1m80</th>
          <th>2m</th>
          <th>2m30</th>
          <th>2m50</th>
          <th>3m</th>
          <th>4m</th>
        </tr>
        <tr>
          <td rowspan="4">Diamètres bout fin</td>
          <td>6/8cm</td>
          <td colspan="3">80 unités par palette</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>8/10cm</td>
          <td colspan="4">71 unités par palette</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>10/12cm</td>
          <td colspan="6">56 unités par palette</td>
        </tr>
        <tr>
          <td>12/15cm</td>
          <td colspan="6">42 unités par palette</td>
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
