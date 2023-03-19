<?php

declare(strict_types=1);

namespace App\Adapter;

use App\Domain\MovableInterface;
use App\Domain\ObjectInterface;
use App\Domain\Vector;

class MovableAdapter implements MovableInterface
{
    public function __construct(private ObjectInterface $object)
    {
    }

    public function getPosition(): Vector
    {
        // TODO: Implement getPosition() method.
        return $this->object->get('position');
    }

    public function setPosition(Vector $position)
    {
        // TODO: Implement setPosition() method.
        $this->object->set('position', $position);
    }

    public function getVelocity(): Vector
    {
        // TODO: Implement getVelocity() method.
        return $this->object->get('velocity');
    }
}