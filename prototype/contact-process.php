<?php //////////////////////////////////////////////////////////////////////////

if($_SERVER['REQUEST_METHOD'] !== 'POST') { exit; }

session_start();

require('translations.php');

require 'lib/form-data.class.php';

$destination = 'julien.procedes@orange.fr';

$inputDescriptions = [

  'raison-sociale' => ['required' => true,  'max-length' => 64,   'specials' => false],
  'first-name'     => ['required' => true,  'max-length' => 64,   'specials' => true],
  'last-name'      => ['required' => true,  'max-length' => 64,   'specials' => true],
  'address'        => ['required' => false, 'max-length' => 256,  'specials' => true],
  'postal-code'    => ['required' => true,  'max-length' => 12,   'specials' => false],
  'city'           => ['required' => true,  'max-length' => 64,   'specials' => true],
  'email'          => ['required' => true,  'max-length' => 64,   'specials' => false],
  'phone'          => ['required' => false, 'max-length' => 14,   'specials' => false],
  'message'        => ['required' => true,  'max-length' => 3000, 'specials' => false]
];

$validationFunctions = [
    
  'raison-sociale' => function($str) { return in_array($str, ['particulier', 'professionnel', 'autre']); },

  'postal-code' => function($str) { return preg_match('/[0-9A-Z ]/', $str); },
          
  'email' => function($str) { return filter_var($str, FILTER_VALIDATE_EMAIL); },

  'phone' => function($str) { return preg_match('/^([0-9]{2} ){4}[0-9]{2}$/', $str); }
];

$errorMessages = [

  'unexpected' => $LG['form_error_message_1'],
  'required'   => $LG['form_error_message_2'],
  'max-length' => $LG['form_error_message_3'],
  'specials'   => $LG['form_error_message_4'],

  'raison-sociale' => $LG['form_error_message_5'],
  'postal-code'    => $LG['form_error_message_6'],
  'email'          => $LG['form_error_message_7'],
  'phone'          => $LG['form_error_message_8']
];

$statusMessages = [

  $LG['form_status_message_1'],
  $LG['form_status_message_2']
];

$formData = new FormData($_POST, $inputDescriptions, $validationFunctions, $errorMessages);

if(!$formData->isValidated()) {

  exit(json_encode(['status' => 'error', 'errors' => $formData->getErrorMessages()]));
}

$mailStatus = sendMail($destination, $formData->getAssoc());

exit(json_encode(['status' => 'ok', 'msg' => $mailStatus ? $statusMessages[0] : $statusMessages[1]]));

////////////////////////////////////////////////////////////////////////////////

function sendMail($destination, $data) {
  
  $subject = '=?utf-8?B?'.base64_encode('Site B3D - '.$data['raison-sociale']).'?=';

  $encodedFullName = '=?utf-8?B?'.base64_encode($data['first-name'].' '.$data['last-name']).'?=';

  $L = "\r\n";

  $headers = 'From: '.$encodedFullName.' <'.$data['email'].'>'.$L.
             'Reply-To: "'.$encodedFullName.'" <'.$data['email'].'>'.$L.
             'MIME-Version: 1.0'.$L.
             'Content-Type: text/plain; charset=utf-8'.$L;
             'Content-Transfer-Encoding: 7bit';
             
  $message = $L.'Raison sociale: '.$data['raison-sociale'].
             $L.'Prénom: '.$data['first-name'].' Nom: '.$data['last-name'].
             $L.(empty($data['address']) ? '' : 'Adresse: '.$data['address'].' ').
             'Code postal: '.$data['postal-code'].' Ville: '.$data['city'].
             $L.'Courriel: '.$data['email'].(empty($data['phone']) ? '' : ' Téléphone: '.$data['phone']).
             $L.$L.$data['message'];

  return mail($destination, $subject, $message, $headers);
}

///////////////////////////////////////////////////////////////////////////// ?>
