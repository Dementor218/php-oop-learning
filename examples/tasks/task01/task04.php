<?php

declare(strict_types=1);

require __DIR__ . "/../../../vendor/autoload.php";

use App\Week01\Tasks\Task04\EmailNotification;
use App\Week01\Tasks\Task04\PushNotification;
use App\Week01\Tasks\Task04\SmsNotification;

$message = str_repeat("ABC ", 400);

$notifications = [
    new EmailNotification(),
    new SmsNotification(),
    new PushNotification(),
];

foreach ($notifications as $notification) {
    echo $notification->send($message) . PHP_EOL;
    echo 'Длина: ' . mb_strlen($notification->send($message)) . PHP_EOL;
    echo str_repeat('-', 40) . PHP_EOL;
}