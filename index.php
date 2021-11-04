<?php
require_once 'Bicycle.php';

require_once 'Car.php';

require_once 'Truck.php';


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck('white', '2', 'gasoline','15');
echo $truck->forward();
var_dump($truck);
