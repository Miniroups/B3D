window.addEventListener('DOMContentLoaded', function() { new ContactForm('contact-form-process.php'); });

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
