<?php

declare(strict_types=1);

namespace App\Domain;

class FuelBurnable implements FuelBurnableInterface
{
    public function __construct(
        private int $level,
        private int $velocity,
    ) {}

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    public function getVelocity(): int
    {
        return $this->velocity;
    }
}