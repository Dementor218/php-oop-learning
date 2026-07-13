<?php

declare(strict_types=1);

namespace App\Week01\Tasks\Task01;

class Square extends Shape
{
    public function __construct(
        protected readonly float $side,
    ){}

    public function getSide(): float
    {
        return $this->side;
    }

    public function area(): float
    {
        return $this->side ** 2;
    }
}