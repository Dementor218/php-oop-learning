<?php

declare(strict_types=1);

require __DIR__ . '/../../../vendor/autoload.php';

use App\Week01\Tasks\Task06\Document;
use App\Week01\Tasks\Task06\invoice;
use App\Week01\Tasks\Task06\Contract;
use App\Week01\Tasks\Task06\Report;
use App\Week01\Tasks\Task06\AnnualReport;

$documentStatic = [
    Invoice::createStatic("Документ №1"),
    Contract::createStatic("Документ №2"),
    Report::createStatic("Документ №3"),
    AnnualReport::createStatic("Документ №4")
];

$documentSelf = [
    Invoice::createSelf("Документ №1"),
    Contract::createSelf("Документ №2"),
    Report::createSelf("Документ №3"),
    AnnualReport::createSelf("Документ №4")
];

foreach ($documentStatic as $document) {
    echo $document::class . PHP_EOL;
}

echo PHP_EOL;

foreach ($documentSelf as $document) {
    echo $document::class . PHP_EOL;
}

// Static срабатываает в момент создания экземляра класса
// Self ссылается на класс еще до создания экземляра
