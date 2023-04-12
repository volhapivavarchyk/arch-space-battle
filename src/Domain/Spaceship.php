<?php

declare(strict_types=1);

namespace App\Domain;

class Spaceship implements ObjectInterface
{
    public function __construct(
        private Vector $position = new Vector([1, 1]),
        private Vector $velocity = new Vector([1, 1]),
        private int $direction = 1,
        private int $angularVelocity = 1,
        private int $maxDirections = 1,
    ) {}

    public function get(string $property)
    {
        // TODO: Implement get() method.
        return $this->$property;

    }

    public function set(string $property, $value)
    {
        // TODO: Implement set() method.
        $this->$property = $value;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->get($property);
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->set($property, $value);
        }
    }
}