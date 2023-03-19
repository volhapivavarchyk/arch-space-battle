<?php

namespace App\ExceptionHandler;

use App\Command\CommandInterface;
use Throwable;

interface ExceptionHandlerInterface
{
    public function handle(CommandInterface $command, Throwable $exception);
}