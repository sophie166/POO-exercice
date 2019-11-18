<?php

require_once 'HighWay.php';
require_once 'PedestrianWay.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'ResidentialWay.php';
require_once 'MotorWay.php';

$peugot = new Car('blue',4, 'fuel');
$road = new ResidentialWay();
$road->addVehicule($peugot);
var_dump($road);

