  <!-- INCLUDE DU HEAD + SPECIFICITEES A LA PAGE -->
  <?php include_once('parts/head.php'); ?>
  <link rel="stylesheet" href="styles/contact.css">
  <script src="scripts/contact-form.js" type="text/javascript"></script>
  <title>B3D | Contacto</title>
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
<div class="form-group col-md-4">
<label for="identification" class="required">Usted es...</label>
<select class="form-control" name="raison-sociale">
<option value="" selected>Por favor elija</option>
<option value="particulier">un particular</option>
<option value="professionnel">un profesional</option>
<option value="autre">Otro</option>
</select>
<div class="error-message"></div>
<!-- form-group --></div>

<div class="form-group col-md-4">
<label for="first-name" class="required">Primer nombre</label>
<input id="first-name" class="form-control" name="first-name" type="text" placeholder="">
<div class="error-message"></div>
<!-- form-group --></div>

<div class="form-group col-md-4">
<label for="last-name" class="required">Apellido</label>
<input id="last-name" class="form-control" name="last-name" type="text" placeholder="">
<div class="error-message"></div>
<!-- form-group --></div>
<!-- row --></div>

<div class="row">
<div class="form-group col-md-6">
<label for="address">Dirección</label>
<input id="address" class="form-control" name="address" type="text" placeholder="Su dirección">
<div class="error-message"></div>
<!-- form-group --></div>

<div class="form-group col-md-3">
<label for="postal-code" class="required">Código postal</label>
<input id="postal-code" class="form-control" name="postal-code" type="text" placeholder="Código postal">
<div class="error-message"></div>
<!-- form-group --></div>

<div class="form-group col-md-3">
<label for="city" class="required">Ciudad</label>
<input id="city" class="form-control" name="city" type="text" placeholder="Ciudad">
<div class="error-message"></div>
</div>
<!-- row --></div>

<div class="row">
<div class="form-group col-md-6">
<label for="email" class="required">Email</label>
<input id="email" class="form-control" name="email" type="email" placeholder="@">
<div class="error-message"></div>
<!-- form-group --></div>

<div class="form-group col-md-6">
<label for="telephone">Teléfono</label>
<input id="phone" class="form-control" name="phone" type="text" placeholder="formato : 06 01 02 03 04">
<div class="error-message"></div>
<!-- form-group --></div>
<!-- row --></div>

<div class="row">
<div class="form-group col-md-12">
<label for="message" class="required">Mensaje</label>
<textarea id="message" class="form-control" name="message" placeholder="Ingrese su mensaje aquí (máximo 3000 caracteres)" rows="3" maxlength="3000"></textarea>
<div class="error-message"></div>
<!-- form-group --></div>
<!-- row --></div>

<div class="row">
<div id="required-sign-description" class="col-md-12"><span id="required-sign"></span>Esta informacion es requerida</div>
<!-- row --></div>

<div class="row">
<div class="form-group col-md-12">
<label for="opt-in-checkbox"><input id="opt-in-checkbox" type="checkbox">
Acepto la <a href="mentions.php">política de privacidad</a> del sitio</label>
<!-- form-group --></div>
<!-- row --></div>

<button id="contact-form-submit-button" class="btn btn-primary" disabled>Enviar a</button>
<div id="status-message" class="col-md-12"></div>
</form>

    </section>

    <!-- INCLUDE DU FOOTER -->
    <?php include_once('parts/footer.php'); ?>
    <!-- Script -->
    <?php include_once('parts/scripts-communs.php'); ?>
  </body>
</html>
