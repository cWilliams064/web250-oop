<?php

class Bicycle {

  var $brand;
  var $model;
  var $year;
  var $description;
  var $weightKg = 0.0;

  function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  function weight_lbs() {
    return floatval($this->weightKg) * 2.2046226218;
  }

  function set_weight_lbs($value) {
    $this->weightKg = floatval($value) / 2.2046226218;
  }

}

$trek = new Bicycle;
$trek->brand = "Trek";
$trek->model = "Emonda";
$trek->year = "2017";
$trek->description = "Enjoy balanced ride quality, superior handling, and the added benefit of free speed.";
$trek->weightKg = "1.0";

$cd = new Bicycle;
$cd->brand = "Cannondale";
$cd->model = "Synapse";
$cd->year = "2016";
$cd->description = "Light and fast. Composed, capable, and easy to ride hard on all kinds of roads.";
$cd->weightKg = "8.0";

echo $trek->name() . "<br>";
echo $trek->weightKg . "<br>";
echo $trek->weight_lbs() . "<br>";
echo "<br>";

echo $cd->name() . "<br>";
echo $cd->weightKg . "<br>";
echo $cd->weight_lbs() . "<br>";
echo "<br>";

echo $trek->set_weight_lbs(2);
echo $trek->weightKg . "<br>";
echo $trek->weight_lbs() . "<br>";
