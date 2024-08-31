<?php

class Animal {
  
  public $name;
  public $color;
  public $species;
  public $habitat;
  public $dietType; 

  public function displayDetails() {
    echo "Name: " . $this->name . "<br>";
    echo "Color: " . $this->color . "<br>";
    echo "Species: " . $this->species . "<br>";
    echo "Habitat: " . $this->habitat . "<br>";
    echo "Diet Type: " . $this->dietType . "<br>";
  }
}

class Bird extends Animal {

  public $canFly;
  private $wingspanInches;
  public $eggColor;

  public function set_wingspan_inches($value) {
    $this->wingspanInches = max(0, floatval($value));
  }

  private function get_wingspan_inches() {
    return $this->wingspanInches . " in";
  }

  private function wingspan_to_meters() {
    return round($this->wingspanInches * 0.0254, 2);
  }

  private function get_wingspan_meters() {
    return $this->wingspan_to_meters() . " m";
  }

  public function displayDetails() {
    parent::displayDetails();
    echo "Can Fly: " . $this->canFly . "<br>";
    echo "Wingspan in Inches: " . $this->get_wingspan_inches() . "<br>";
    echo "Wingspan in Meters: " . $this->get_wingspan_meters() . "<br>";
    echo "Egg Color: " . $this->eggColor . "<br>";
  }
}

class Mammal extends Animal {

  public $hasFur;

  public function displayDetails() {
    parent::displayDetails();
    echo "Has Fur: " . $this->hasFur . "<br>";
  }
}

class Fish extends Animal {

  public $hasGills;
  private $finCount;
  public $waterType;

  public function set_fin_count($value) {
    if (!is_int($value) || $value < 0) {
      trigger_error("Fin count must be a non-negative whole number.");
      return;
    }
    else {
     $this->finCount = $value;
    }
  }

  private function swim() {
    echo $this->name . "'s swim in " . $this->waterType . ".<br>";
  }

  public function displayDetails() {
    parent::displayDetails();
    echo "Has Gills: " . $this->hasGills . "<br>";
    echo "Fin Count: " . $this->finCount . "<br>";
    echo $this->swim();
  }
}

// Bird
$eagle = new Bird();
$eagle->name = 'Eagle';
$eagle->color = 'Brown';
$eagle->species = 'Aquila Nipalensis';
$eagle->habitat = 'Mountains';
$eagle->dietType = 'Carnivore';
$eagle->canFly = 'Yes';
$eagle->set_wingspan_inches(2.3);
$eagle->eggColor = 'White';

echo '<h2>Bird Details:</h2>';
echo $eagle->displayDetails();
echo '<br>';

// Mammal
$platypus = new Mammal();
$platypus->name = 'Platypus';
$platypus->color = 'Brown';
$platypus->species = 'Ornithorhynchus Anatinus';
$platypus->habitat = 'Freshwater rivers and lakes';
$platypus->dietType = 'Omnivore';
$platypus->hasFur = 'Yes';

echo '<h2>Mammal Details:</h2>';
echo $platypus->displayDetails();
echo '<br>';

// Fish
$shark = new Fish();
$shark->name = 'Shark';
$shark->color = 'Gray';
$shark->species = 'Carcharodon Carcharias';
$shark->habitat = 'Ocean';
$shark->dietType = 'Carnivore';
$shark->hasGills = 'Yes';
$shark->set_fin_count(5);
$shark->waterType = 'saltwater';

echo '<h2>Fish Details:</h2>';
echo $shark->displayDetails();
