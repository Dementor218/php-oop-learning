<?php

declare(strict_types=1);

namespace App\Week01\Day01;

class Cat extends Animal
{
    public function makeSound(): string
    {
        return "Мяу!";
    }
}