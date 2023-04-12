<?php

declare(strict_types=1);

namespace App\Command;

use App\Exception\TwiceRepeatThrownException;

class TwiceRepeatCommand implements CommandInterface
{
    public function __construct(private CommandInterface $cmd)
    {
    }

    public function execute()
    {
        try{
            $this->cmd->execute();
        } catch (\Throwable $e) {
            throw new TwiceRepeatThrownException($e->getMessage(), 0, $e);
        }
    }
}