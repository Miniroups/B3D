  <!-- INCLUDE DU HEAD + SPECIFICITEES A LA PAGE -->
  <?php include_once('parts/head.php'); ?>
  <link rel="stylesheet" href="styles/contact.css">
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
<label for="identification" class="required">Vous êtes...</label>
<select class="form-control" name="raison-sociale">
<option value="" selected>Veuillez choisir</option>
<option value="particulier">un particulier</option>
<option value="professionnel">un professionnel</option>
<option value="autre">autre</option>
</select>
<div class="error-message"></div>
<!-- form-group --></div>

<div class="form-group col-md-4">
<label for="first-name" class="required">Prénom</label>
<input id="first-name" class="form-control" name="first-name" type="text" placeholder="">
<div class="error-message"></div>
<!-- form-group --></div>

<div class="form-group col-md-4">
<label for="last-name" class="required">Nom</label>
<input id="last-name" class="form-control" name="last-name" type="text" placeholder="">
<div class="error-message"></div>
<!-- form-group --></div>
<!-- row --></div>

<div class="row">
<div class="form-group col-md-6">
<label for="address">Adresse</label>
<input id="address" class="form-control" name="address" type="text" placeholder="Votre adresse">
<div class="error-message"></div>
<!-- form-group --></div>

<div class="form-group col-md-3">
<label for="postal-code" class="required">Code Postal</label>
<input id="postal-code" class="form-control" name="postal-code" type="text" placeholder="Code Postal">
<div class="error-message"></div>
<!-- form-group --></div>

<div class="form-group col-md-3">
<label for="city" class="required">Ville</label>
<input id="city" class="form-control" name="city" type="text" placeholder="Ville">
<div class="error-message"></div>
</div>
<!-- row --></div>

<div class="row">
<div class="form-group col-md-6">
<label for="email" class="required">Courriel</label>
<input id="email" class="form-control" name="email" type="email" placeholder="@">
<div class="error-message"></div>
<!-- form-group --></div>

<div class="form-group col-md-6">
<label for="telephone">Téléphone</label>
<input id="phone" class="form-control" name="phone" type="text" placeholder="format : 06 01 02 03 04">
<div class="error-message"></div>
<!-- form-group --></div>
<!-- row --></div>

<div class="row">
<div class="form-group col-md-12">
<label for="message" class="required">Message</label>
<textarea id="message" class="form-control" name="message" placeholder="Entrez ici votre message (maximum 3000 caractères)" rows="3" maxlength="3000"></textarea>
<div class="error-message"></div>
<!-- form-group --></div>
<!-- row --></div>

<div class="row">
<div id="required-sign-description" class="col-md-12"><span id="required-sign"></span>Ces informations sont requises</div>
<!-- row --></div>

<div class="row">
<div class="form-group col-md-12">
<label for="opt-in-checkbox"><input id="opt-in-checkbox" type="checkbox">
J'accepte la <a href="mentions.php">politique de confidentialité</a> du site</label>
<!-- form-group --></div>
<!-- row --></div>

<button id="contact-form-submit-button" class="btn btn-primary" disabled>Envoyer</button>
<div id="status-message" class="col-md-12"></div>
</form>

<script>

window.addEventListener('DOMContentLoaded', function() { new ContactForm('contact-process.php'); });

function ContactForm(url) {

  var form = $('form[name="contact-form"]'), statusMessage = $('#status-message');

  form.find(':input').each(function() {

    $(this).on('input', function() {

      $(this).parent().find('.error-message').empty();

      statusMessage.empty();
    });
  });

  var submitButton = $('#contact-form-submit-button');

  $('#opt-in-checkbox').on('change', function() {

    submitButton.prop('disabled', !$(this).is(':checked'));
  });

  form.submit(function(e) {

    e.preventDefault();

    $.ajax({type: 'POST', url: url, data: form.serialize(), dataType: 'json', success: onSuccess });
  });

  function onSuccess(response) {

    if(response['status'] === 'ok') {

      form[0].reset();

      $('.error-message').empty();

      statusMessage.html(response['msg']);
    }
    else {

      form.find(':input').each(function() {

        $(this).next('.error-message').html(response['errors'][$(this).prop('name')]);
      });
    }
  }
}

</script>

    </section>

    <!-- INCLUDE DU FOOTER -->
    <?php include_once('parts/footer.php'); ?>
  </body>
</html>
