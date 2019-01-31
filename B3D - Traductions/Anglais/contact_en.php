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
<div class="form-group col-md-4">
<label for="identification" class="required">You are...</label>
<select class="form-control" name="raison-sociale">
<option value="" selected>Please choose</option>
<option value="particulier">a particular</option>
<option value="professionnel">a professional</option>
<option value="autre">Other</option>
</select>
<div class="error-message"></div>
<!-- form-group --></div>

<div class="form-group col-md-4">
<label for="first-name" class="required">First Name</label>
<input id="first-name" class="form-control" name="first-name" type="text" placeholder="">
<div class="error-message"></div>
<!-- form-group --></div>

<div class="form-group col-md-4">
<label for="last-name" class="required">Name</label>
<input id="last-name" class="form-control" name="last-name" type="text" placeholder="">
<div class="error-message"></div>
<!-- form-group --></div>
<!-- row --></div>

<div class="row">
<div class="form-group col-md-6">
<label for="address">Adress</label>
<input id="address" class="form-control" name="address" type="text" placeholder="Your adress">
<div class="error-message"></div>
<!-- form-group --></div>

<div class="form-group col-md-3">
<label for="postal-code" class="required">Postal Code</label>
<input id="postal-code" class="form-control" name="postal-code" type="text" placeholder="Postal Code">
<div class="error-message"></div>
<!-- form-group --></div>

<div class="form-group col-md-3">
<label for="city" class="required">City</label>
<input id="city" class="form-control" name="city" type="text" placeholder="City">
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
<label for="telephone">Phone number</label>
<input id="phone" class="form-control" name="phone" type="text" placeholder="format : 06 01 02 03 04">
<div class="error-message"></div>
<!-- form-group --></div>
<!-- row --></div>

<div class="row">
<div class="form-group col-md-12">
<label for="message" class="required">Message</label>
<textarea id="message" class="form-control" name="message" placeholder="Enter your message here (maximum 3000 characters)" rows="3" maxlength="3000"></textarea>
<div class="error-message"></div>
<!-- form-group --></div>
<!-- row --></div>

<div class="row">
<div id="required-sign-description" class="col-md-12"><span id="required-sign"></span>This information is required</div>
<!-- row --></div>

<div class="row">
<div class="form-group col-md-12">
<label for="opt-in-checkbox"><input id="opt-in-checkbox" type="checkbox">
I accept the <a href="mentions.php">privacy policy</a> of the Website</label>
<!-- form-group --></div>
<!-- row --></div>

<button id="contact-form-submit-button" class="btn btn-primary" disabled>Send</button>
<div id="status-message" class="col-md-12"></div>
</form>

    </section>

    <!-- INCLUDE DU FOOTER -->
    <?php include_once('parts/footer.php'); ?>
    <!-- Script -->
    <?php include_once('parts/scripts-communs.php'); ?>
  </body>
</html>
