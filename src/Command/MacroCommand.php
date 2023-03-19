<?php

declare(strict_types=1);

namespace App\Command;

class MacroCommand implements CommandInterface
{
    public function __construct(private array $commands)
    {
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}