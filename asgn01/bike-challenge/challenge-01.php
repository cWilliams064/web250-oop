<?php

class Bicycle {

  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg = 0.0;

  function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218;
  }

  function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

}

$trek = new Bicycle;
$trek->brand = "Trek";
$trek->model = "Emonda";
$trek->year = "2017";
$trek->description = "Enjoy balanced ride quality, superior handling, and the added benefit of free speed.";
$trek->weight_kg = "1.0";

$cd = new Bicycle;
$cd->brand = "Cannondale";
$cd->model = "Synapse";
$cd->year = "2016";
$cd->description = "Light and fast. Composed, capable, and easy to ride hard on all kinds of roads.";
$cd->weight_kg = "8.0";

echo $trek->name() . "<br>";
echo $trek->weight_kg . "<br>";
echo $trek->weight_lbs() . "<br>";
echo "<br>";

echo $cd->name() . "<br>";
echo $cd->weight_kg . "<br>";
echo $cd->weight_lbs() . "<br>";
echo "<br>";

echo $trek->set_weight_lbs(2);
echo $trek->weight_kg . "<br>";
echo $trek->weight_lbs() . "<br>";
