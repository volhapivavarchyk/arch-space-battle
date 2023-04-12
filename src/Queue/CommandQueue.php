<?php

declare(strict_types=1);

namespace App\Queue;

use App\Adapter\MovableAdapter;
use App\Adapter\RotatableAdapter;
use App\Command\CommandInterface;
use App\Command\MacroCommand;
use App\Command\MoveCommand;
use App\Command\RotateCommand;
use App\Domain\Spaceship;

class CommandQueue
{
    private static array $commands;
    public function __construct() {
//        $spaceship = new Spaceship();
//
//        $this->commands = [
//          new MacroCommand([
//              new MoveCommand(new MovableAdapter($spaceship)),
//              new RotateCommand(new RotatableAdapter($spaceship)),
//          ])
//        ];
    }
    public function take(): ?CommandInterface
    {
        return array_pop(self::$commands);
    }

    public static function push(CommandInterface $command): void
    {
        self::$commands[] = $command;
    }
}