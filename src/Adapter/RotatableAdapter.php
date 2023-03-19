<?php

declare(strict_types=1);

namespace App\Adapter;

use App\Domain\ObjectInterface;
use App\Domain\RotatableInterface;

class RotatableAdapter implements RotatableInterface
{
    public function __construct(private ObjectInterface $object)
    {
    }

    public function getDirection(): int
    {
        // TODO: Implement getDirection() method.
        return $this->object->get('direction');
    }

    public function setDirection(int $direction)
    {
        // TODO: Implement setDirection() method.
        $this->object->set('direction', $direction);
    }

    public function getAngularVelocity(): int
    {
        // TODO: Implement getAngularVelocity() method.
        return $this->object->get('angularVelocity');
    }

    public function getMaxDirections(): int
    {
        // TODO: Implement getMaxDirections() method.
        return $this->object->get('maxDirection');
    }
}