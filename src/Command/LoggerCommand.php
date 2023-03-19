<?php
declare(strict_types=1);

namespace App\Command;

use Monolog\{Handler\StreamHandler, Level, Logger};
use Psr\Log\LoggerInterface;

class LoggerCommand implements CommandInterface
{
    private const LOGGER_NAME = 'app';

    private const PATH_TO_LOGS = 'var/logs/app.log';

    public function __construct(
        private string $commandClass,
        private \Throwable $exception,
        private Level $level
    ) {
        $this->logger = new Logger(self::LOGGER_NAME);
        $this->logger->pushHandler(new StreamHandler(self::PATH_TO_LOGS, $this->level));
    }

    public function execute()
    {
        $this->logger->log($this->level, $this->commandClass.': '.$this->exception->getMessage(), $this->exception->getTrace());
    }
}