<?php

declare(strict_types = 1);

namespace App\Week01\Tasks\Task01;

class Circle extends Shape
{
    const float PI = 3.14;

    public function __construct (
        protected readonly float $radius
    ){}

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function area(): float
    {
        return self::PI * pow($this->getRadius(), 2);
    }
}