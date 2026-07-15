<?php

declare(strict_types=1);

namespace App\Week01\Tasks\Task04;

abstract class Notification
{
    const int MAX_LENGTH = 0;

    public function send(string $message): string
    {
        return substr($message, 0, static::MAX_LENGTH);
    }
}