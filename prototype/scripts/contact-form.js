window.addEventListener('load', function() { new ContactForm('contact-form-process.php'); });

function ContactForm(url) {

  var form = $('form[name="contact-form"]'),
      optInCheckbox = $('#opt-in-checkbox'),
      submitButton = $('#contact-form-submit-button'),
      statusMessage = $('#status-message');

  form.find(':input').each(function() {

    $(this).on('input', function() {

      $(this).parent().find('.error-message').empty();

      statusMessage.empty();
    });
  });

  optInCheckbox.on('change', function() {

    submitButton.prop('disabled', !$(this).is(':checked'));
  });

  form.submit(function(e) {

    e.preventDefault();

    $.ajax({type: 'POST', url: url, data: form.serialize(), datatType: 'json', success: onSuccess });
  });

  function onSuccess(response) {
    
    var responseObject = JSON.parse(response);
    
    if(responseObject['status'] === 'ok') {

      form[0].reset();

      $('.error-message').empty();

      statusMessage.html(responseObject['msg']);

      if(responseObject['mail-data']) { form.append(responseObject['mail-data']); } // for testing purposes
    }
    else {

      form.find(':input').each(function() {

        $(this).next('.error-message').html(responseObject['errors'][$(this).prop('name')]);
      });
    }
  }
}
