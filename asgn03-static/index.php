<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asgn02 Inheritance</title>
  </head>
    
  <body>
    <h1>Inheritance Examples</h1>

    <?php 
        include 'Bird.php';
        
        $bird = new Bird;
        echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

        $flyCatcher = new YellowBelliedFlyCatcher;
        echo '<p>The song of the ' . $flyCatcher->name . ' on breeding grounds is "' . $flyCatcher->song . '".</p>';

        $kiwi = new Kiwi;
        $kiwi->flying = "no";
        echo "<p>The " . $flyCatcher->name . " " . $flyCatcher->canFly() . ".</p>";
        echo "<p>The " . $kiwi->name . " " . $kiwi->canFly() . ".</p>";
        echo '<hr>';    
    ?>

    <h1>Static Examples</h1>

    <h2>Before using the create method</h2>

    <?php
      echo 'Bird count: ' . Bird::getInstanceCount() . '<br>';
      echo 'Flycatcher count: ' . YellowBelliedFlyCatcher::getInstanceCount() . '<br>';
      echo 'Kiwi count: ' . Kiwi::getInstanceCount() . '<br>';
    ?>

    <h2>After using the create method</h2>

    <?php
      $bird = Bird::create();
      $flyCatcher = YellowBelliedFlyCatcher::create();
      $kiwi = Kiwi::create();

      echo 'Bird count: ' . Bird::getInstanceCount() . '<br>';
      echo 'Flycatcher count: ' . YellowBelliedFlyCatcher::getInstanceCount() . '<br>';
      echo 'Kiwi count: ' . Kiwi::getInstanceCount() . '<br>';
    ?>

  </body>
</html>
