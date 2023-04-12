<?php

declare(strict_types=1);

namespace App\Domain;

class Fueled implements FueledInterface
{
    public function __construct(
        private int $level
    ) {}

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): void
    {
        $this->level = $level;
    }
}