<?php

namespace App\ExceptionHandler;

use App\Command\CommandInterface;
use App\Command\LoggerCommand;
use App\Queue\CommandQueue;
use Monolog\Handler\Level;
use Throwable;

class LoggerExceptionHandler implements ExceptionHandlerInterface
{
    public function handle(CommandInterface $command, Throwable $exception)
    {
        CommandQueue::push(new LoggerCommand($command::class, $exception, Level::error));
    }
}