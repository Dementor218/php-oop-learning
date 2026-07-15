<?php

declare(strict_types=1);

require __DIR__ . "/../../../vendor/autoload.php";

use App\Week01\Tasks\Task05\Document;
use App\Week01\Tasks\Task05\Invoice;
use App\Week01\Tasks\Task05\Contract;
use App\Week01\Tasks\Task05\Report;
use App\Week01\Tasks\Task05\AnnualReport;

$invoice = Invoice::create('Счёт №1');
$contract = Contract::create("Договор аренды");
$report = Report::create("Рапорт новый");
$annual = AnnualReport::create("Годовой отчёт 2026");

echo $invoice::class . PHP_EOL;
echo $contract::class . PHP_EOL;
echo $report::class . PHP_EOL;
echo $annual::class . PHP_EOL;