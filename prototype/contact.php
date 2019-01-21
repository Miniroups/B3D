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
    <!-- Formulaire -->
    <form style="padding: 20px" class="container-fluid" name="contact-form" action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post" autocomplete="off">


    <div class="row">
      <div class="form-group col-sm-4">
        <label for="identification" class="required">Vous êtes...</label>
        <select class="form-control">
          <option selected readonly>Veuillez choisir</option>
          <option value="valeur1">Un particulier</option>
         <option value="valeur2">un professionnel</option>
         <option value="valeur3">Autre</option>
       </select>
     </div>

    <div class="form-group col-sm-4">
    <label for="first-name" class="required">Prénom</label>
    <input id="first-name" class="form-control" name="first-name" type="text" placeholder="Votre prénom"<?= isset($data['first-name']) ? ' value="'.$data['first-name'].'"' : '' ?>>
    <?= isset($messages['first-name']) ? '<div class="message">'.$messages['first-name'].'</div>' : ''; ?>
    <!-- form-group --></div>

    <div class="form-group col-sm-4">
    <label for="last-name" class="required">Nom</label>
    <input id="last-name" class="form-control" name="last-name" type="text" placeholder="Votre nom"<?= isset($data['last-name']) ? ' value="'.$data['last-name'].'"' : '' ?>>
    <?= isset($messages['last-name']) ? '<div class="message">'.$messages['last-name'].'</div>' : ''; ?>
    <!-- form-group --></div>
    <!-- row --></div>

    <div class="row">
      <div class="form-group col-sm-6">
        <label for="adress">Adresse</label>
        <input id="adress" class="form-control" name="adress" type="adress" placeholder="Votre adresse">
      </div>

      <div class="form-group col-sm-2">
        <label for="code-postal" class="required">Code Postal</label>
        <input id="code-postal" class="form-control" name="code-postal" type="code-postal" placeholder="Code Postal">
      </div>

      <div class="form-group col-sm-4">
        <label for="ville" class="required">Ville</label>
        <input id="ville" class="form-control" name="ville" type="ville" placeholder="Ville">
      </div>
    </div>

    <div class="row">
    <div class="form-group col-sm-6">
    <label for="email" class="required">Courriel</label>
    <input id="email" class="form-control" name="email" type="email" placeholder="@"<?= isset($data['email']) ? ' value="'.$data['email'].'"' : '' ?>>
    <?= isset($messages['email']) ? '<div class="message">'.$messages['email'].'</div>' : ''; ?>
    <!-- form-group --></div>

    <div class="form-group col-sm-6">
    <label for="telephone">Téléphone</label>
    <input id="phone" class="form-control" name="phone" type="text" placeholder="+33123456789"<?= isset($data['phone']) ? ' value="'.$data['phone'].'"' : '' ?>>
    <?= isset($messages['phone']) ? '<div class="message">'.$messages['phone'].'</div>' : ''; ?>
    <!-- form-group --></div>
    <!-- row --></div>

    <div class="row">
    <div class="form-group col-sm-12">
    <label for="message" class="required">Message</label>
    <textarea id="message" class="form-control" name="message" placeholder="Entrez ici votre message (maximum 3000 caractères)" rows="3" maxlength="3000"><?= isset($data['message']) ? $data['message'] : '' ?></textarea>
    <?= isset($messages['message']) ? '<div class="message">'.$messages['message'].'</div>' : ''; ?>
    <!-- form-group --></div>
    <!-- row --></div>

    <div class="row">
    <div id="required-sign-description" class="col-sm-12"><span id="required-sign"></span>Ces informations sont requises</div>
    <!-- row --></div>

    <div class="row">
    <div class="form-group col-sm-12">
    <label for="opt-in-checkbox"><input id="opt-in-checkbox" name="opt-in-checkbox" type="checkbox"<?= isset($data['opt-in-checkbox']) ? 'checked' : '' ?>> J'accepte <a href="mentions.php" target="_blank">la politique de confidentialité du site</a></label>
    <!-- form-group --></div>
    <!-- row --></div>

    <button id="contact-form-submit-button" name="submit" type="submit" class="btn btn-primary"<?= isset($data['opt-in-checkbox']) ? '' : 'disabled' ?>>Envoyer</button>

    <div class="row">
    <?= isset($messages['form-process']) ? '<div class="message col-sm-12">'.$messages['form-process'].'</div>' : ''; ?>
    <!-- row --></div>
    </form>
    
    <!-- INCLUDE DU FOOTER -->
    <?php include_once('parts/footer.php'); ?>
    <!-- Script -->
    <?php include_once('parts/scripts-communs.php'); ?>
  </body>
</html>
