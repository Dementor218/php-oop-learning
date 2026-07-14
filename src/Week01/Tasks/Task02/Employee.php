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

    abstract protected function getBonusRate(): float;

    public function calculateSalary(): float
    {
        return $this->baseSalary * (1 + $this->getBonusRate());
    }

    public function describe(): string
    {
        return sprintf(
            '%s: Имя: %s, Зарплата: %.2f',
            $this::class,
            $this->name,
            $this->calculateSalary()
        );
    }
}