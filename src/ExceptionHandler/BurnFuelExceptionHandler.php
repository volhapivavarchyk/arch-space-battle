<?php

declare(strict_types=1);

namespace App\ExceptionHandler;

use App\Command\CommandInterface;
use App\Command\RepeatCommand;
use App\Command\TwiceRepeatCommand;
use App\Queue\CommandQueue;

class BurnFuelExceptionHandler
{
    public function __construct()
    {
    }

    public function handle(CommandInterface $cmd, \Exception $e): void
    {
//        CommandQueue::push(new RepeatCommand($cmd));
        CommandQueue::push(new TwiceRepeatCommand($cmd));
    }
}