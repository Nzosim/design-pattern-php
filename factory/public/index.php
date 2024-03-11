<?php
require(__DIR__ . '/../vendor/autoload.php');

use App\Factory\VehiculeFactory;

echo "Essayer d'utiliser votre factory ici : \n\n";
$car = VehiculeFactory::create('car', 0.5, 'electric');
var_dump($car);

$truck = VehiculeFactory::create('truck', 0.3, 'diesel');
var_dump($truck);

$bicycle = VehiculeFactory::create('bicycle', 0.1, 'muscle');
var_dump($bicycle);


#####################################
echo "\n\nDeuxième méthode du factory : \n\n";

$vehicule = VehiculeFactory::choose(10, 10);
var_dump($vehicule);

$vehicule = VehiculeFactory::choose(10, 100);
var_dump($vehicule);

$vehicule = VehiculeFactory::choose(10, 1000);
var_dump($vehicule);

$vehicule = VehiculeFactory::choose(100, 1000);
var_dump($vehicule);

$vehicule = VehiculeFactory::choose(100, 0);
var_dump($vehicule);