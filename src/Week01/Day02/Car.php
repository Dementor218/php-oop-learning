<?php

declare(strict_types = 1);

namespace App\Week01\Day02;

class Car extends Vehicle
{
    public function getType(): string
    {
        return "Автомобиль";
    }
}