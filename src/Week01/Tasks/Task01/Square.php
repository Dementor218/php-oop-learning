<?php

declare(strict_types=1);

namespace App\Week01\Tasks\Task01;

class Square extends Shape
{
    public function __construct(
        protected readonly float $width,
    ){}

    public function getWidth(): float
    {
        return $this->width;
    }

    public function area(): float
    {
        return pow($this->width, 2);
    }
}