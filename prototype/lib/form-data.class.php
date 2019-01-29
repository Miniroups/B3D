<?php //////////////////////////////////////////////////////////////////////////

class FormData {

  protected $sanitizedData = [], $errorMessages = [];

  function __construct($data, $inputDescriptions, $validationFunctions, $errorMessages) {
    
    $inputNames = array_keys($inputDescriptions);
    
    foreach($data as $key => $raw) {
      
      $this->sanitizedData[$key] = '';
      
      if(!in_array($key, $inputNames)) {
        
        $this->errorMessages[$key] = $errorMessages['unexpected'];
        
        continue;
      }
      
      $desc = $inputDescriptions[$key];
      
      if($raw === '') {
        
        if(!empty($desc['required'])) { 
        
          $this->errorMessages[$key] = $errorMessages['required'];
        }
        
        continue;
      }
      
      if(!empty($desc['max-length']) && strlen($raw) > $desc['max-length']) {
        
        $this->errorMessages[$key] = $errorMessages['max-length'];
          
        continue;
      }
      
      if(!empty($desc['specials']) && preg_match('/[&"<>]/', $raw)) {
      
        $this->errorMessages[$key] = $errorMessages['specials'];
        
        continue;
      }
      
      if(!empty($validationFunctions[$key]) && !$validationFunctions[$key]($raw)) {

        $this->errorMessages[$key] = $errorMessages[$key];
        
        continue;
      }
      
      $sanitized = htmlspecialchars(trim($raw), ENT_COMPAT, 'utf-8');

      if(!empty($desc[$key]['type'])) {
        
        switch($desc[$key]['type']) {

          case('integer'): $cast = (integer) $sanitized; break;

          case('float'): $cast = (float) $sanitized; break;

          case('boolean'): $cast = ($sanitized === 'true'); break;
        }        
      }
      else { $cast = (string) $sanitized; }

      $this->sanitizedData[$key] = $cast;
    }
  }

  function __destruct() { $this->sanitizedData = $this->errorMessages = []; }

  public function isValidated() { return empty($this->errorMessages); }

  public function getAssoc() { return $this->sanitizedData; }

  public function getKeys() { return array_keys($this->sanitizedData); }

  public function getValues() { return array_values($this->sanitizedData); }

  public function getErrorMessages() { return $this->errorMessages; }
}

///////////////////////////////////////////////////////////////////////////// ?>
