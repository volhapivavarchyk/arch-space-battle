<?php

declare(strict_types=1);

namespace App\Adapter;

use App\Domain\FueledInterface;
use App\Domain\ObjectInterface;

class FueledAdapter implements FueledInterface
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
}