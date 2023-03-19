<?php

declare(strict_types=1);

namespace App\ExceptionHandler;

use App\Command\BurnFuelCommand;
use App\Command\CommandInterface;
use App\Command\MoveCommand;
use App\Command\RepeatCommand;
use App\Command\RotateCommand;
use App\Command\TwiceRepeatCommand;
use App\Exception\BurnFuelException;
use App\Exception\RepeatThrownException;
use App\Exception\TwiceRepeatThrownException;

class CommandExceptionHandler
{
    private const EXCEPTION_HANDLERS = [
        MoveCommand::class => [
        ],
        RotateCommand::class => [
        ],
        BurnFuelCommand::class => [
            BurnFuelException::class => BurnFuelExceptionHandler::class,
        ],
        RepeatCommand::class => [
            RepeatThrownException::class => LoggerExceptionHandler::class,
        ],
        TwiceRepeatCommand::class => [
            TwiceRepeatThrownException::class => RepeatExceptionHandler::class,
        ],
    ];

    public function handle(CommandInterface $cmd, \Throwable $e): void
    {
        $handler = $this->getExceptionHandlerObject($cmd::class, $e::class);
        $handler->handle($cmd, $e);
    }

    private function getExceptionHandlerObject(string $commandClass, string $exceptionClass): ExceptionHandlerInterface
    {
        $handlerClass = self::EXCEPTION_HANDLERS[$commandClass][$exceptionClass];
        return new $handlerClass();
    }
}