<?php

declare(strict_types=1);

namespace App\Week01\Day02;

class VehicleDemo
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

    public static function createDefault(string $model, int $maxSpeed): static
    {
        return new static($model, $maxSpeed);
    }

    public static function createDefaultWrong(string $model, int $maxSpeed): self
    {
        return new self($model, $maxSpeed);
    }
}