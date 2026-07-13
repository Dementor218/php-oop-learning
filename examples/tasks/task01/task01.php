<?php

declare(strict_types=1);

require __DIR__ . '/../../../vendor/autoload.php';

use App\Week01\Tasks\Task01\Shape;
use App\Week01\Tasks\Task01\Circle;
use App\Week01\Tasks\Task01\Rectangle;
use App\Week01\Tasks\Task01\Square;

$shapes = [
    new Circle(8),
    new Rectangle(4, 12.78),
    new Square(7.983),
];

foreach ($shapes as $shape) {
    echo $shape->area() . PHP_EOL;
}


