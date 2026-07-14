<?php

declare(strict_types=1);

namespace App\Week01\Tasks\Task02;

class Manager extends Employee
{
    public function calculateSalary(): float
    {
        return $this->getSalary() + $this->getSalary() * 0.5;
    }
}