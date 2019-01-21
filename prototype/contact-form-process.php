<?php //////////////////////////////////////////////////////////////////////////

if($_SERVER['REQUEST_METHOD'] !== 'POST') { exit; }

require 'lib/form-data.class.php';

$destination = 'jeremie.cheney@gmail.com';

$inputDescriptions = [

  'raison-sociale' => ['required' => true,  'max-length' => 64],
  'first-name'     => ['required' => true,  'max-length' => 64,  'specials' => true],
  'last-name'      => ['required' => true,  'max-length' => 64,  'specials' => true],
  'address'        => ['required' => false, 'max-length' => 256, 'specials' => true],
  'postal-code'    => ['required' => true,  'max-length' => 12],
  'city'           => ['required' => true,  'max-length' => 64,  'specials' => true],
  'email'          => ['required' => true,  'max-length' => 64],
  'phone'          => ['required' => false, 'max-length' => 14],
  'message'        => ['required' => true,  'max-length' => 3000]
];

$validationFunctions = [
    
  'raison-sociale' => function($raisonSociale = '') {
  
    $raisonsSociales = ['particulier', 'professionnel', 'autre'];
  
    return !empty($raisonSociale) && in_array($raisonSociale, $raisonsSociales);
  },

  'postal-code' => function($str = '') { return !empty($str) && preg_match('/[0-9A-Z ]/', $str); },
          
  'email' => function($str = '') { return !empty($str) && filter_var($str, FILTER_VALIDATE_EMAIL); },

  'phone' => function($str = '') { return !empty($str) && preg_match('/^([0-9]{2} ){4}[0-9]{2}$/', $str); }
];

$errorMessages = [

  'required'   => 'Information requise',
  'max-length' => 'Information trop longue',
  'specials'   => 'Caractères rejetés: &amp; &quot; &lt; &gt;',

  'raison-sociale' => 'Choix invalide',
  'postal-code'    => 'Format invalide',
  'email'          => 'Adresse invalide',
  'phone'          => 'Format invalide'
];

$statusMessages = [

  "Votre message a bien été envoyé.",
  "Une erreur s'est produite. Veuillez réessayer ultérieurement."
];

$formData = new FormData($_POST, $inputDescriptions, $validationFunctions, $errorMessages);

if($formData->isValidated()) {

  $statusMessage = sendMail($formData->getSanitizedData(), $destination, $statusMessages);

  exit(json_encode(['status' => 'ok', 'msg' => $statusMessage]));

  //exit(json_encode(['status' => 'ok', 'msg' => 'This is a test.', 'mail-data' => getMailData($formData->getSanitizedData())]));
}
else { exit(json_encode(['status' => 'error', 'errors' => $formData->getErrorMessages()])); }

function sendMail($data, $destination, $statusMessages) {
  
  $subject = '=?utf-8?B?'.base64_encode('Site B3D - '.$data['raison-sociale']).'?=';

  $encodedFullName = '=?utf-8?B?'.base64_encode($data['first-name'].' '.$data['last-name']).'?=';

  $L = "\r\n";

  $headers = 'From: '.$encodedFullName.' <'.$data['email'].'>'.$L.
             'Reply-To: "'.$encodedFullName.'" <'.$data['email'].'>'.$L.
             'MIME-Version: 1.0'.$L.
             'Content-Type: text/plain; charset=utf-8'.$L;
             //'Content-Type: text/html; charset=utf-8'.$L;
             'Content-Transfer-Encoding: 7bit';
             
  $message = $L.'Raison sociale: '.$data['raison-sociale'].
             $L.'Prénom: '.$data['first-name'].' Nom: '.$data['last-name'].
             $L.(empty($data['address']) ? '' : 'Adresse: '.$data['address'].' ').'Code postal: '.$data['postal-code'].' Ville: '.$data['city'].
             $L.'Courriel: '.$data['email'].(empty($data['phone']) ? '' : ' Téléphone: '.$data['phone']).
             $L.$L.$data['message'];

  $status = mail($destination, $subject, $message, $headers);

  return $status ? $statusMessages[0] : $statusMessages[1];
}

function getMailData($data) {

  $mailData = [

    'To: '       => 'jeremie.cheney@gmail.com',
    'Subject: '  => 'A message from the web',
    'From: '     => htmlspecialchars('"'.$data['first-name'].' '.$data['last-name'].'" <'.$data['email'].'>'),
    'Reply-To: ' => htmlspecialchars('"'.$data['first-name'].' '.$data['last-name'].'" <'.$data['email'].'>'),

    'first-name' => $data['first-name'],
    'last-name'  => $data['last-name'],
    'email'      => $data['email'],
    'phone'      => $data['phone'],
    'message'    => $data['message']
  ];

  return '<pre>'.print_r($mailData, true).'</pre>';
}

///////////////////////////////////////////////////////////////////////////// ?>
