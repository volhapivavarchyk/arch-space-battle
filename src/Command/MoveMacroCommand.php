<?php
declare(strict_types=1);

namespace App\Command;

use App\Adapter\FuelBurnableAdapter;
use App\Adapter\FueledAdapter;
use App\Adapter\MovableAdapter;
use App\Domain\ObjectInterface;

class MoveMacroCommand extends MacroCommand
{
    public function __construct(ObjectInterface $object)
    {
        $commands = [
            new CheckFuelCommand(new FueledAdapter($object)),
            new MoveCommand(new MovableAdapter($object)),
            new BurnFuelCommand(new FuelBurnableAdapter($object)),
        ];

        parent::__construct($commands);
    }
}