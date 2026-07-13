<?php

declare(strict_types=1);

namespace App\Week01\Tasks\Task01;

class Circle extends Shape
{
    public function __construct(
        protected readonly float $radius
    ){}

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function area(): float
    {
        return M_PI * $this->getRadius() ** 2;
    }
}