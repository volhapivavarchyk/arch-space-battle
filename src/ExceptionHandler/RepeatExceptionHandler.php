<?php

namespace App\ExceptionHandler;

use App\Command\CommandInterface;
use App\Command\RepeatCommand;
use App\Queue\CommandQueue;
use Throwable;

class RepeatExceptionHandler implements ExceptionHandlerInterface
{
    public function handle(CommandInterface $cmd, Throwable $exception)
    {
        CommandQueue::push(new RepeatCommand($cmd));
    }
}