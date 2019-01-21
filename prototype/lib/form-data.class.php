<?php //////////////////////////////////////////////////////////////////////////

class FormData {

  protected $o = [];

  function __construct($data, $inputs, $functions, $messages) {

    $this->o['rawData'] = $data;
    $this->o['inputs'] = $inputs;
    $this->o['functions'] = $functions;
    $this->o['messages'] = $messages;

    $this->o['sanitizedData'] = [];
    $this->o['validatedData'] = [];
    $this->o['errorMessages'] = [];

    $this->checkRequired();

    $this->checkLength();

    $this->validate();
    
    $this->sanitize();
  }

  function __destruct() { $this->o = []; }

  protected function checkRequired() {

    foreach($this->o['inputs'] as $input => $description) {

      if(!$description['required']) { continue; }

      if(empty($this->o['rawData'][$input])) {

        $this->o['errorMessages'][$input] = $this->o['messages']['required'];
      }
    }
  }

  protected function checkLength() {

    foreach($this->o['inputs'] as $input => $description) {

      $raw = $this->o['rawData'][$input];

      if(empty($raw) || empty($description['max-length'])) { continue; }

      if(strlen($raw) > $description['max-length']) {

        $this->o['errorMessages'][$input] = $this->o['messages']['max-length'];
      }
    }
  }

  protected function validate() {

    foreach($this->o['rawData'] as $key => $value) {

      if(empty($value)) { $this->o['validatedData'][$key] = ''; continue; }

      if(empty($this->o['functions'][$key])) { $this->o['validatedData'][$key] = $value; continue; }

      if(!$this->o['functions'][$key]($value)) {

        $this->o['errorMessages'][$key] = $this->o['messages'][$key];

        $this->o['validatedData'][$key] = '';
      }
      else { $this->o['validatedData'][$key] = $value; }
    }
  }
  
  protected function sanitize() {

    foreach($this->o['rawData'] as $key => $value) {

      if(empty($value) || empty($this->o['inputs'][$key])) { $this->o['sanitizedData'][$key] = ''; continue; }

      $sanitized = htmlspecialchars(trim($value), ENT_COMPAT, 'utf-8');

      $type = empty($this->o['inputs'][$key]['type']) ? 'string' : $this->o['inputs'][$key]['type'];
      
      switch($type) {

        case('string'): $cast = (string) $sanitized; break;

        case('integer'): $cast = (integer) $sanitized; break;

        case('float'): $cast = (float) $sanitized; break;

        case('boolean'): $cast = ($sanitized === 'true'); break;
      }

      $this->o['sanitizedData'][$key] = $cast;
    }
  }
  
  public function isValidated() { return empty($this->o['errorMessages']); }

  public function getRawData() { return $this->o['rawData']; }

  public function getSanitizedData() { return $this->o['sanitizedData']; }

  public function getValidatedData() { return $this->o['validatedData']; }

  public function getErrorMessages() { return $this->o['errorMessages']; }
}

///////////////////////////////////////////////////////////////////////////// ?>
