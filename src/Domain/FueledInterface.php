<?php

declare(strict_types=1);

namespace App\Domain;

interface FueledInterface
{
    public function getLevel(): int;

    public function setLevel(int $level): void;
}