<?php

class instrument {
  // Properties (descriptors)
  var $name;
  var $type;
  var $brand;
  var $price;

  // Constructor
  /*
  public function __construct($name, $type, $brand, $price)
  {
    $this->name = $name;
    $this->type = $type;
    $this->brand = $brand;
    $this->price = $price;
  }
  */

  // Methods
  public function displayDetails()
  {
    echo "Instrument Details<br>";
    echo "Name: " . $this->name . "<br>";
    echo "Type: " . $this->type . "<br>";
    echo "Brand: " . $this->brand . "<br>";
    echo "Price: " . $this->price . "<br>";
  }

}

// Instantiate a new instance

// Create a new object

//$cello = new instrument("Cello", "Willow", "Cecilio", 2000.00);
//$cello->displayDetails();

$cello = new instrument;

$cello->name = "Cello";
$cello->type = "Oak";
$cello->brand = "Sentor";
$cello->price = 1500.00;
echo "<br>";

$cello->displayDetails();
