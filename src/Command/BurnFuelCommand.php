<?php

declare(strict_types=1);

namespace App\Command;

use App\Domain\FuelBurnableInterface;
use App\Exception\BurnFuelException;
use Exception;

class BurnFuelCommand implements CommandInterface
{
    public function __construct(private FuelBurnableInterface $fuelBurnable)
    {
    }

    /**
     * @throws Exception
     */
    public function execute(): void
    {
        $level = $this->fuelBurnable->getLevel() - $this->fuelBurnable->getVelocity();
//        $level = $this->fuelBurnable->getLevel();

        if ($level < 0) {
            throw new BurnFuelException("The object has run out of fuel");
        }

        $this->fuelBurnable->setLevel($level);
    }
}