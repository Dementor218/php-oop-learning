<?php

declare(strict_types=1);

require __DIR__ . '/../../../vendor/autoload.php';

use App\Week01\Tasks\Task02\Employee;
use App\Week01\Tasks\Task02\Developer;
use App\Week01\Tasks\Task02\Manager;
use App\Week01\Tasks\Task02\Intern;

$employees = [
    new Developer("Иван", 27000),
    new Manager("Владимир", 25670),
    new Intern("Игорь", 12300)
];

foreach ($employees as $employee) {
    echo $employee->describe() . PHP_EOL;
}
