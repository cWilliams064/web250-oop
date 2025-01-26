<?php

function myAutoload($class) {
  if(preg_match('/\A\w+\Z/', $class)) {
    include 'classes/' . $class . '.class.php';
  }
}

spl_autoload_register('myAutoload');

$flycatcher = new Bird;
$flycatcher->commonName = 'Acadian Flycatcher';

echo $flycatcher->commonName;
