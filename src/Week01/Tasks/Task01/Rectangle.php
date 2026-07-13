<?php

declare(strict_types=1);

namespace App\Week01\Tasks\Task01;

class Rectangle extends Shape
{
    public function __construct(
        protected readonly float $width,
        protected readonly float $height
    ){}

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function area(): float
    {
        return $this->width * $this->height;
    }
}