<?php

declare(strict_types=1);

namespace App\Command;

use App\Domain\FueledInterface;
use App\Exception\CheckFuelException;
use Exception;

class CheckFuelCommand implements CommandInterface
{
    public function __construct(private FueledInterface $fueled)
    {
    }

    /**
     * @throws Exception
     */
    public function execute(): void
    {
        $level = $this->fueled->getLevel();

        if ($level <= 0) {
            throw new CheckFuelException("The object has run out of fuel");
        }
    }
}