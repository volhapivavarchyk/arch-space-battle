<?php

declare(strict_types=1);

namespace App\Service;

use App\Command\QueueInterface;
use App\ExceptionHandler\CommandExceptionHandler;

class CommandService
{
    public function __construct(
        private QueueInterface $queue,
        private CommandExceptionHandler $exceptionHandler
    ) {}
    public function run(): void
    {
        $stop = false;

        while (!$stop) {
            $cmd = $this->queue->take();

            try {
                $cmd->execute();
            } catch (\Throwable $e) {
                $this->exceptionHandler->handle($cmd, $e);
            }
        }

    }
}