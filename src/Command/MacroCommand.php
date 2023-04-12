<?php

declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;

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