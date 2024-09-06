<?php

class Bicycle {

  public $brand;
  public $model;
  public $year;
  public $description;
  private $weightKg = 0.0;
  public $category;
  protected static $wheels = 2;
  public static $instanceCount = 0;

  public const BIKE_CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

  public function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  public function weight_lbs() {
    return floatval($this->weightKg) * 2.2046226218;
    return $weightLbs . " lbs";
  }

  public function set_weight_lbs($value) {
    $this->weightKg = floatval($value) / 2.2046226218;
  }

  public function set_weight_kg($value) {
    $this->weightKg = floatval($value);
  }

  public function weight_kg() {
    return $this->weightKg . " kg";
  }

  public static function create() {
    $instanceClass = get_called_class();
    $instance = new $instanceClass;
    self::$instanceCount++;
    return $instance;
  }

  public static function wheel_details() {
    $wheel_sentence = static::$wheels == 1 ? '1 wheel.' : static::$wheels . 'wheels.';
    return "It has " . $wheel_sentence;
  }
}

class Unicycle extends Bicycle {

  protected static $wheels = 1;
}

$trek = new Bicycle;
$trek->brand = "Trek";
$trek->model = "Emonda";
$trek->year = "2017";

$uni = new Unicycle;

echo '<h1>Before Adding</h1>';
echo 'Bicycle count: ' . Bicycle::$instanceCount . '<br>';
echo 'Unicycle count: ' . Unicycle::$instanceCount . '<br>';

echo '<hr>';

$mountainBike = Bicycle::create();
$uni = Unicycle::create();

echo '<h1>After Adding</h1>';
echo 'Bicycle count: ' . Bicycle::$instanceCount . '<br>';
echo 'Unicycle count: ' . Unicycle::$instanceCount . '<br>';

echo '<hr>';

echo '<h1>Bike Categories</h1>';
echo 'Categories: ' . implode(', ', Bicycle::BIKE_CATEGORIES) . '<br>';
$trek->category = Bicycle::BIKE_CATEGORIES[1];
echo 'Category: ' . $trek->category . '<br>';

echo '<hr>';

echo '<h1>Unicycle</h1>';
echo $uni->wheel_details();
