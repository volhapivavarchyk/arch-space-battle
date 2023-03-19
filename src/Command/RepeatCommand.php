<?php

declare(strict_types=1);

namespace App\Command;

use App\Exception\RepeatThrownException;

class RepeatCommand implements CommandInterface
{
    public function __construct(private CommandInterface $cmd)
    {
    }

    public function execute()
    {
        try{
            $this->cmd->execute();
        } catch (\Throwable $e) {
            throw new RepeatThrownException($e->getMessage(), 0, $e);
        }
    }
}