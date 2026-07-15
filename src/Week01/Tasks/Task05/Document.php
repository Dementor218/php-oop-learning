<?php

declare(strict_types=1);

namespace App\Week01\Tasks\Task05;

abstract class Document
{
    public function __construct(
        protected string $title,
    )
    {}

    public static function create(string $title): static
    {
        return new static($title);
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}