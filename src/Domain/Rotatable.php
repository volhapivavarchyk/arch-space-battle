<?php

declare(strict_types=1);

namespace App\Domain;

class Rotatable implements RotatableInterface
{
    public function __construct(
        private int $direction,
        private int $angularVelocity,
        private int $maxDirections,
    ) {}

    public function getDirection(): int
    {
        // TODO: Implement getDirection() method.
        return $this->direction;
    }

    public function setDirection(int $direction)
    {
        // TODO: Implement setDirection() method.
        $this->direction = $direction;
    }

    public function getAngularVelocity(): int
    {
        // TODO: Implement getAngularVelocity() method.
        return $this->angularVelocity;
    }

    public function getMaxDirections(): int
    {
        // TODO: Implement getMaxDirections() method.
        return $this->maxDirections;
    }
}