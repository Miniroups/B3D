  <!-- INCLUDE DU HEAD + SPECIFICITEES A LA PAGE -->
  <?php include_once('parts/head.php'); ?>
  <link rel="stylesheet" href="styles/contact.css">
  <script src="scripts/contact-form.js" type="text/javascript"></script>
  <title>B3D | Contact</title>
</head>

  <body>
    <!-- INCLUDE DU HEADER -->
    <?php include('parts/header.php'); ?>
    <!-- Coordonnées -->
    <div class="section-contact">
      <?php include_once('parts/section-contact.php'); ?>
    </div>

    <section id="contact-form-section">
      
<form class="contact-form container-fluid" name="contact-form" autocomplete="on">

<div class="row">
<div class="form-group col-sm-4">
<label for="identification" class="required">Vous êtes...</label>
<select class="form-control" name="raison-sociale">
<option selected readonly>Veuillez choisir</option>
<option value="particulier">un particulier</option>
<option value="professionnel">un professionnel</option>
<option value="autre">autre</option>
</select>
</div>
  
<div class="form-group col-sm-4">
<label for="first-name" class="required">Prénom</label>
<input id="first-name" class="form-control" name="first-name" type="text" placeholder="">
<div class="error-message"></div>
<!-- form-group --></div>

<div class="form-group col-sm-4">
<label for="last-name" class="required">Nom</label>
<input id="last-name" class="form-control" name="last-name" type="text" placeholder="">
<div class="error-message"></div>
<!-- form-group --></div>
<!-- row --></div>

<div class="row">
<div class="form-group col-sm-6">
<label for="email" class="required">Courriel</label>
<input id="email" class="form-control" name="email" type="email" placeholder="@">
<div class="error-message"></div>
<!-- form-group --></div>

<div class="form-group col-sm-6">
<label for="telephone">Téléphone</label>
<input id="phone" class="form-control" name="phone" type="text" placeholder="format : 06 01 02 03 04">
<div class="error-message"></div>
<!-- form-group --></div>
<!-- row --></div>

<div class="row">
<div class="form-group col-sm-12">
<label for="message" class="required">Message</label>
<textarea id="message" class="form-control" name="message" placeholder="Entrez ici votre message (maximum 3000 caractères)" rows="3" maxlength="3000"></textarea>
<div class="error-message"></div>
<!-- form-group --></div>
<!-- row --></div>

<div class="row">
<div id="required-sign-description" class="col-sm-12"><span id="required-sign"></span>Ces informations sont requises</div>
<!-- row --></div>

<div class="row">
<div class="form-group col-sm-12">
<label for="opt-in-checkbox"><input id="opt-in-checkbox" type="checkbox">
J'accepte la <a href="privacy-policy.php">politique de confidentialité</a> du site</label>
<!-- form-group --></div>
<!-- row --></div>

<button id="contact-form-submit-button" class="btn btn-primary" disabled>Envoyer</button>
<div id="status-message" class="col-sm-12"></div>
</form>
      
    </section>
    
    <!-- INCLUDE DU FOOTER -->
    <?php include_once('parts/footer.php'); ?>
    <!-- Script -->
    <?php include_once('parts/scripts-communs.php'); ?>
  </body>
</html>
