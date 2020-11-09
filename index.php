<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Skateboard.php';
require_once 'LightableInterface.php';

$bike = new Bicycle('red', 4);
$bike->setCurrentSpeed(15);
var_dump($bike);
$bike->switchOn();
var_dump($bike);




$car = new Car('red', 4, 'electric');
var_dump($car);
$car->switchOn();
var_dump($car);
$skate = new Skateboard('yellow', 0);
$skate-> setNbWheels(4);
var_dump($skate);



