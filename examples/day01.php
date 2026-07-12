<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Week01\Day01\Animal;
use App\Week01\Day01\Dog;
use App\Week01\Day01\Cat;
use App\Week01\Day01\Cow;

$animals = [
    new Dog("Мухтар", 5),
    new Cat("Барсик", 4),
    new Cow("Ветка", 8),
];

foreach ($animals as $animal) {
    echo $animal->describe() . PHP_EOL;
}
