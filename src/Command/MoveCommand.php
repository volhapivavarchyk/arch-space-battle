<?php
declare(strict_types=1);

namespace App\Command;

use App\Domain\MovableInterface;
use App\Domain\Vector;

class MoveCommand implements CommandInterface
{
    public function __construct(private readonly MovableInterface $movable)
    {
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $this->movable->setPosition(Vector::plus($this->movable->getPosition(), $this->movable->getVelocity()));
    }
}