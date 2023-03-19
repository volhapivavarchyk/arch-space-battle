<?php

declare(strict_types=1);

namespace App\Domain;

class Movable implements MovableInterface
{
    public function __construct(
        private Vector $position,
        private Vector $velocity,
    ) {}


    public function getPosition(): Vector
    {
        // TODO: Implement getPosition() method.
        return $this->position;
    }

    public function setPosition(Vector $position)
    {
        // TODO: Implement setPosition() method.
        $this->position = $position;
    }

    public function getVelocity(): Vector
    {
        // TODO: Implement getVelocity() method.
        return $this->velocity;
    }
}