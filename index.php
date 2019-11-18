<?php

require_once 'HighWay.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'LightableInterface.php';
require_once 'ResidentialWay.php';
$peugot = new Car('blue',4, 'fuel');
$road = new ResidentialWay();
$road->addVehicule($peugot);
var_dump($road);

$bike = new Bicycle('blue', 2);
$car = new Car('yellow', 4, 'fuel');

 $bike->switchOn();
 $bike->setCurrentSpeed(12);
 echo $bike->switchOn();

