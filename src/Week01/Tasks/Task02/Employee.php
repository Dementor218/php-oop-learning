<?php

declare(strict_types=1);

namespace App\Week01\Tasks\Task02;

abstract class Employee
{
    public function __construct(
        protected readonly string $name,
        protected float $baseSalary,
    ){}

    public function getName(): string
    {
        return $this->name;
    }

    public function getSalary(): float
    {
        return $this->baseSalary;
    }

    public abstract function calculateSalary(): float;

    public function describe(): string
    {
        return get_class($this) . ': Имя: ' . $this->getName() . ', Зарплата: ' . $this->calculateSalary();
    }
}