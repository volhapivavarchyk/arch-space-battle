<?php

declare(strict_types=1);

namespace App\Adapter;

use App\Domain\FuelBurnableInterface;
use App\Domain\MovableInterface;
use App\Domain\ObjectInterface;
use App\Domain\Vector;

class FuelBurnableAdapter implements FuelBurnableInterface
{
    public function __construct(private ObjectInterface $object)
    {
    }

    public function getLevel(): int
    {
        // TODO: Implement getPosition() method.
        return $this->object->get('level');
    }

    public function setLevel(int $level): void
    {
        // TODO: Implement setPosition() method.
        $this->object->set('level', $level);
    }

    public function getVelocity(): int
    {
        // TODO: Implement getVelocity() method.
        return $this->object->get('velocity');
    }
}