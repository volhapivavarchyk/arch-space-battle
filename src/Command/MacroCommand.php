<?php

declare(strict_types=1);

namespace App\Command;

use App\Exception\CommandException;

class MacroCommand implements CommandInterface
{
    public function __construct(private array $commands)
    {
    }

    public function execute()
    {
        try {
            foreach ($this->commands as $command) {
                $command->execute();
            }
        } catch (\Exception $e) {
            throw new CommandException($e->getMessage(), 1, $e);
        }
    }
}