<?php

declare(strict_types=1);

namespace App\Week01\Day02;

class Truck extends Vehicle
{
    public function getType(): string
    {
        return "Грузовик";
    }
}