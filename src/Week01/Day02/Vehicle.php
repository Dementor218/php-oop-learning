<?php

declare(strict_types=1);

namespace App\Week01\Day02;

class Vehicle
{
    public function __construct(
        private readonly string $model,
        private readonly int $maxSpeed
    ) {}

    public function getModel(): string
    {
        return $this->model;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

//    public abstract function getType(): string;

    public static function createDefault($model, $maxSpeed): static
    {
        return new static($model, $maxSpeed);
    }


    public static function createDefaultWrong($model, $maxSpeed): self
    {
        return new self($model, $maxSpeed);
    }


    public function describe(): string
    {
        return $this->getType() . ' ' . $this->getModel() . ', макс. скорость: ' . $this->getMaxSpeed() . ' км/ч';
    }

}