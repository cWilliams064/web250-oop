<?php

class Bird {
  var $commonName;
  var $food;
  var $nestPlacement;
  var $conservationLevel;

  function song() {
    if ($this->commonName == "Eastern Towhee") {
      return "drink-your-tea!";
    }
    elseif ($this->commonName == "Indigo Bunting") {
      return "what!";
    }
    else{
      return "unknown song.";
    }
  }

  function canFly() {
    if ($this->commonName == "Eastern Towhee" || $this->commonName == "Indigo Bunting") {
      return "This bird can fly";
    } 
    else {
      return "Unknown flying ability";
    }
  }

  function birdDetails() {
    echo "Bird Details<br>";
    echo "Common Name: " . $this->commonName . "<br>";
    echo "Food: " . $this->food . "<br>";
    echo "Nest Placement " . $this->nestPlacement . "<br>";
    echo "Conservation Level: " . $this->conservationLevel . "<br>";
    echo "Song: " . $this->song() . "<br>";
    echo "Flying Ability: " . $this->canFly() . "<br>";
  }

}

$bird1 = new Bird();
$bird1->commonName = "Eastern Towhee";
$bird1->food = "Seeds, Fruits, Insects, Spiders";
$bird1->nestPlacement = "Ground";
$bird1->conservationLevel = "Low";

$bird2 = new Bird();
$bird2->commonName = "Indigo Bunting";
$bird2->food = "Small Seeds, Berries, Buds, and Insects";
$bird2->nestPlacement = "Roadsides, and railroad rights-of-wafields and on the edges.";
$bird2->conservationLevel = "Low";

echo "<h2>Bird 1</h2>";
$bird1->birdDetails();

echo "<br>";

echo "<h2>Bird 2</h2>";
$bird2->birdDetails();
