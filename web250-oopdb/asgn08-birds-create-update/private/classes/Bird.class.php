<?php

class Bird {

  // --- Start of Active Record Code ---
  static protected $database;

  static public function set_database($database) {
    self::$database = $database;
  }

  static public function find_by_sql($sql) {
    $result = self::$database->query($sql);
    if(!$result) {
      exit("Database query failed.");
    }
    else {
      $object_array = [];
      while($record = $result->fetch_assoc()) {
        $object_array[] = self::instantiate($record);
      }
      $result->free();
      return $object_array;
    }
  }

  static public function find_all() {
    $sql = "SELECT * FROM birds";
    return self::find_by_sql($sql);
  }

  static public function find_by_id($id) {
    $sql = "SELECT * FROM birds ";
    $sql .= "WHERE id='" . self::$database->escape_string($id) . "'";
    $obj_array = self::find_by_sql($sql);
    if(!empty($obj_array)) {
      return array_shift($obj_array);
    }
    else {
      return false;
    }
  }
  
  static protected function instantiate($record) {
    $object = new self;

    foreach($record as $property => $value) {
      if(property_exists($object, $property)) {
        $object->$property = $value;
      }
    }
    return $object;
  }

  // --- End of Active Record Code ---

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

}

?>
