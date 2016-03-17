<?php

require_once "Automobile.php";

$make = 'vw';
$model = 'bug';
$color = 'papayawhip';

$car1 = new Automobile($make, $model, $color);
echo $car1->getDescription() . PHP_EOL;

$yourCar = new Automobile('audi', 'zippy-fast', 'pink');
echo $yourCar->getDescription() . PHP_EOL;

