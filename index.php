<?php

require_once 'Car.php';
require_once 'Bicycle.php';


$homerPinkCar = new Car('Pink' , 4, 'Essence');

$margeStationWagon = new Car('blue', 4,'Eau');

$bycleSophie = new Bicycle('blue');

var_dump($bycleSophie);
var_dump($homerPinkCar);
var_dump($margeStationWagon);

echo $bycleSophie->forward();
echo $bycleSophie ->brake();
echo "<br>";
echo "<br>";

echo $margeStationWagon->forward();
echo $margeStationWagon->brake();
