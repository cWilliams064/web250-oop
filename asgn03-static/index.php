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

<<<<<<< HEAD
    $flyCatcher = new YellowBelliedFlyCatcher;
    echo '<p>The song of the ' . $flyCatcher->name . ' on breeding grounds is "' . $flyCatcher->song . '".</p>';

    $kiwi = new Kiwi;
    $kiwi->flying = "no";
    echo "<p>The " . $flyCatcher->name . " " . $flyCatcher->canFly() . ".</p>";
    echo "<p>The " . $kiwi->name . " " . $kiwi->canFly() . ".</p>";    
=======
<<<<<<< HEAD
<<<<<<< HEAD
    $fly_catcher = new YellowBelliedFlyCatcher;
    echo '<p>The song of the ' . $fly_catcher->name . ' on breeding grounds is "' . $fly_catcher->song . '".</p>';

    $kiwi = new Kiwi;
    $kiwi->flying = "no";
    echo "<p>The " . $fly_catcher->name . " " . $fly_catcher->can_fly() . ".</p>";
    echo "<p>The " . $kiwi->name . " " . $kiwi->can_fly() . ".</p>";    
=======
=======
>>>>>>> dev
    $flyCatcher = new YellowBelliedFlyCatcher;
    echo '<p>The song of the ' . $flyCatcher->name . ' on breeding grounds is "' . $flyCatcher->song . '".</p>';

    $kiwi = new Kiwi;
    $kiwi->flying = "no";
    echo "<p>The " . $flyCatcher->name . " " . $flyCatcher->canFly() . ".</p>";
    echo "<p>The " . $kiwi->name . " " . $kiwi->canFly() . ".</p>";    
<<<<<<< HEAD
>>>>>>> dev
=======
>>>>>>> dev
>>>>>>> 7423b4c06fa2c395a19a40dd476c42f75854f266

?>

</body>
</html>

