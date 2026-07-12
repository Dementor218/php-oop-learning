<?php

declare(strict_types=1);

namespace App\Week01\Day01;

class Dog extends Animal
{
    public function makeSound(): string
    {
        return "Гав!";
    }
}