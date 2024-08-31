<?php

class Bicycle {

  public $brand;
  public $model;
  public $year;
  public $description;
  private $weightKg = 0.0;
  protected $wheels = 2;

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

  public function wheel_details() {
    $wheel_sentence = $this->wheels == 1 ? "1 wheel." : "$this->wheels wheels.";
    return "It has " . $wheel_sentence;
  }
}

class Unicycle extends Bicycle {

  protected $wheels = 1;
}

$trek = new Bicycle;
$trek->brand = "Trek";
$trek->model = "Emonda";
$trek->year = "2017";

$uni = new Unicycle;

echo "Bicycle: " . $trek->wheel_details() . "<br>";
echo "Unicycle: " . $uni->wheel_details() . "<br>";
echo "<hr>";

echo "Set weight using kg<br>";
$trek->set_weight_kg(1);
echo $trek->weight_kg() . "<br>";
echo $trek->weight_lbs() . "<br>";
echo "<hr>";

echo "Set weight using lbs<br>";
$trek->set_weight_lbs(2);
echo $trek->weight_kg() . "<br>";
echo $trek->weight_lbs() . "<br>";
echo "<hr>";

echo "Set weight for Unicycle<br>";
$uni->set_weight_kg(1);
echo $uni->weight_kg() . "<br>";
echo $uni->weight_lbs() . "<br>";
echo "<hr>";
