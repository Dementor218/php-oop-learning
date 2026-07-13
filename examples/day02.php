<?php

declare(strict_types=1);

use App\Week01\Day02\Vehicle;
use App\Week01\Day02\Car;
use App\Week01\Day02\Motorcycle;
use App\Week01\Day02\Truck;

require __DIR__ . '/../vendor/autoload.php';


$vehicles = [
    Car::createDefault("Lada Vesta", 180),
    Motorcycle::createDefault("Yamaha MT-07", 220),
    Truck::createDefault("KamAZ 5490", 110)
];

foreach ($vehicles as $vehicle) {
    echo $vehicle->describe() . " (класс: " . get_class($vehicle) . ")" . PHP_EOL;
}
