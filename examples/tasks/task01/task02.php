<?php

declare(strict_types=1);

require __DIR__ . '/../../../vendor/autoload.php';

use App\Week01\Tasks\Task02\Employee;
use App\Week01\Tasks\Task02\Developer;
use App\Week01\Tasks\Task02\Manager;
use App\Week01\Tasks\Task02\Intern;

$developer = new Developer("Иван", 27000);
$manager = new Manager("Владимир", 25670);
$intern = new Intern("Игорь", 12300);

echo $developer->describe() . PHP_EOL;
echo $manager->describe() . PHP_EOL;
echo $intern->describe() . PHP_EOL;
