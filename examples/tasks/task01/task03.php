<?php

declare(strict_types=1);

include __DIR__ . "/../../../vendor/autoload.php";

use App\Week01\Tasks\Task03\Config;

$config1 = new Config();
$config2 = new Config();
$config3 = new Config();
$config4 = new Config();
$config5 = new Config();

echo Config::getCount();