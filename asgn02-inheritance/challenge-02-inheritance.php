<?php

class Animal {
  
  var $name;
  var $color;
  var $species;
  var $habitat;
  var $dietType; 

  function displayDetails() {
    echo "Name: " . $this->name . "<br>";
    echo "Color: " . $this->color . "<br>";
    echo "Species: " . $this->species . "<br>";
    echo "Habitat: " . $this->habitat . "<br>";
    echo "Diet Type: " . $this->dietType . "<br>";
  }
}

class Bird extends Animal {

  var $canFly;
  var $wingSpan;
  var $eggColor;

  function displayDetails() {
    parent::displayDetails();
    echo "Can Fly: " . $this->canFly . "<br>";
    echo "Wing Span: " . $this->wingSpan . " meters<br>";
    echo "Egg Color: " . $this->eggColor . "<br>";
  }
}

class Mammal extends Animal {

  var $hasFur;

  function displayDetails() {
    parent::displayDetails();
    echo "Has Fur: " . $this->hasFur . "<br>";
  }
}

class Fish extends Animal {
  var $hasGills;
  var $finCount;
  var $waterType;

  function swim() {
    echo $this->name . "'s swim in " . $this->waterType . ".<br>";
  }

  function displayDetails() {
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
$eagle->wingSpan = 2.3;
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
$platypus->dietType = 'Omnivore'; // Platypuses are omnivores
$platypus->hasFur = 'Yes';

echo '<h2>Mammal Details:</h2>';
$platypus->displayDetails();
echo '<br>';

// Fish
$shark = new Fish();
$shark->name = 'Shark';
$shark->color = 'Gray';
$shark->species = 'Carcharodon Carcharias';
$shark->habitat = 'Ocean';
$shark->dietType = 'Carnivore';
$shark->hasGills = 'Yes';
$shark->finCount = 5;
$shark->waterType = 'saltwater';

echo '<h2>Fish Details:</h2>';
$shark->displayDetails();
