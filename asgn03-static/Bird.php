<?php

class Bird {
  public $habitat;
  public $food;
  public $nesting = "tree";
  public $conservation;
  public $song = "chirp";
  public $flying = "yes";
  private static $instanceCount = 0;
  protected static $eggNum = 0;

  public function canFly() {
    $flyingString = $this->flying == "yes" ? "can fly" : "is stuck on the ground";
    return  $flyingString ;
  }

  public static function create() {
    $className = get_called_class();
    $newObject = new $className;
    self::$instanceCount++;
    return $newObject;
  }

  public static function getInstanceCount() {
    return self::$instanceCount;
  }
}

class YellowBelliedFlyCatcher extends Bird {
  public $name = "yellow-bellied flycatcher";
  public $diet = "mostly insects.";
  public $song = "flat chilk";
  protected static $eggNum = '3-4, sometimes 5.';
}

class Kiwi extends Bird {
  public $name = "kiwi";
  public $diet = "omnivorous";
  public $flying = "no";
}
