<?php

declare(strict_types=1);

namespace App\Week01\Day01;

abstract class Animal
{
    public function __construct(
        private readonly string $name,
        private readonly int $age,
    ){}

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    abstract public function makeSound(): string;

    public function describe(): string
    {
        return "Меня зовут " .$this->getName() . "! Мне " . $this->getAge() . " лет! Я говорю: " . $this->makeSound();
    }

}