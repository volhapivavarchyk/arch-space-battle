<?php

declare(strict_types=1);

namespace App\Command;

use App\Domain\RotatableInterface;

class RotateCommand implements CommandInterface
{
    public function __construct(private RotatableInterface $rotable)
    {
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $this->rotable->setDirection(($this->rotable->getDirection() + $this->rotable->getAngularVelocity()) % $this->rotable->getMaxDirections());
    }
}