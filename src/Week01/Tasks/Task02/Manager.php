<?php

declare(strict_types=1);

namespace App\Week01\Tasks\Task02;

class Manager extends Employee
{
    protected function getBonusRate(): float
    {
        return 0.5;
    }
}