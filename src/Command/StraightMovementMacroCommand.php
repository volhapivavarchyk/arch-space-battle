<?php
declare(strict_types=1);

namespace App\Command;

use App\Domain\ObjectInterface;
use App\Exception\CommandException;

class StraightMovementMacroCommand extends MacroCommand
{
    public function __construct(ObjectInterface $object)
    {
        $commands = [
            new MoveMacroCommand($object),
            new RepeatCommand(new MoveMacroCommand($object)),
        ];

        parent::__construct($commands);
    }

    /**
     * @throws CommandException
     */
    public function execute()
    {
        $count = 4;

        while ($count) {
            parent::execute();
            $count--;
        }
    }
}