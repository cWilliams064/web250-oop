<?php

class Bird {
  public $habitat;
  public $food;
  public $nesting = "tree";
  public $conservation;
  public $song = "chirp";
  public $flying = "yes";
  public static $instanceCount;
  public static $eggNum;

  public function canFly() {
    $flyingString = $this->flying == "yes" ? $flyingString = "can fly" : $flyingString = "is stuck on the ground";
    return  $flyingString ;
  }

  public static function create() {
    $className = get_called_class();
    $newObject = new $className;
    self::$instanceCount++;
    return $newObject;
  }
}

class YellowBelliedFlyCatcher extends Bird {
  public $name = "yellow-bellied flycatcher";
  public $diet = "mostly insects.";
  public $song = "flat chilk";
  public static $eggNum = '3-4, sometimes 5.';
}

class Kiwi extends Bird {
  public $name = "kiwi";
  public $diet = "omnivorous";
  public $flying = "no";
}
