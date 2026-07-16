<?php

declare(strict_types=1);

namespace App\Week01\Tasks\Task06;

class Document
{
    public function __construct(
        protected string $title,
    )
    {}

    public static function createStatic(string $title): static
    {
        return new static($title);
    }

    public static function createSelf(string $title): self
    {
        return new self($title);
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}