<?php

class Bird extends DatabaseObject {

  static protected $table_name = 'birds';
  static protected $db_columns = ['id', 'commonName', 'habitat', 'food', 'nestPlacement', 'behavior', 'conservationId', 'backyardTips'];

  public $id;
  public $commonName;
  public $habitat;
  public $food;
  public $nestPlacement;
  public $behavior;
  public $conservationId;
  public $backyardTips;
 
  public const CONSERVATION_OPTIONS = [
    1 => 'Low Concern',
    2 => 'Moderate concern',
    3 => 'Extreme concern',
    4 => 'Extinct'
  ];

  public function __construct($args=[]) {
    $this->id = $args['id'] ?? '';
    $this->commonName = $args['commonName'] ?? '';
    $this->habitat = $args['habitat'] ?? '';
    $this->food = $args['food'] ?? '';
    $this->nestPlacement = $args['nestPlacement'] ?? '';
    $this->behavior = $args['behavior'] ?? '';
    $this->conservationId = $args['conservationId'] ?? 1;
    $this->backyardTips = $args['backyardTips'] ?? '';
  }

  public function name() {
    return "{$this->commonName}";
  }

  public function conservation() {
    if($this->conservationId > 0) {
      return self::CONSERVATION_OPTIONS[$this->conservationId];
    }
    else {
      return "Unknown";
    }
  }

  protected function validate() {
    $this->errors = [];

    if(is_blank($this->commonName)) {
      $this->errors[] = "Common Name cannot be blank!";
    }
    
    return $this->errors;
  }

}

?>
