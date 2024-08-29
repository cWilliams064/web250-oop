<?php

// Base class
class CarpentryTool
{
    public $name;
    public $purpose;

    // Method to describe the tool
    public function describe()
    {
        return "This is a {$this->name} used for {$this->purpose}.";
    }
}

// Derived class for Hand Tools
class HandTool extends CarpentryTool
{
    public $toolType;

    // Override the describe method
    public function describe()
    {
        return parent::describe() . " It is a {$this->toolType} hand tool.";
    }
}

// Derived class for Power Tools
class PowerTool extends CarpentryTool
{
    public $powerSource;

    // Override the describe method
    public function describe()
    {
        return parent::describe() . " It is powered by {$this->powerSource}.";
    }
}

// Examples of usage
// create a new instance of a hand tool
$hammer = new HandTool();
$hammer->name = 'Hammer';
$hammer->purpose = 'Driving nails';
$hammer->toolType = 'Striking';

$saw = new HandTool();
$saw->name = 'Saw';
$saw->purpose = 'Cutting wood';
$saw->toolType = 'Cutting';

$drill = new PowerTool();
$drill->name = 'Drill';
$drill->purpose = 'Drilling holes';
$drill->powerSource = 'Electric';

$router = new PowerTool();
$router->name = 'Router';
$router->purpose = 'Shaping edges';
$router->powerSource = 'Cordless Electric';

echo $hammer->describe() . "\n"; // Output: This is a Hammer used for Driving nails. It is a Striking hand tool.
echo $saw->describe() . "\n";   // Output: This is a Saw used for Cutting wood. It is a Cutting hand tool.
echo $drill->describe() . "\n";  // Output: This is a Drill used for Drilling holes. It is powered by Electric.
echo $router->describe() . "\n"; // Output: This is a Router used for Shaping edges. It is powered by Cordless Electric.
