<?php

declare(strict_types=1);

namespace App\Domain;

interface MovableInterface
{
    public function getPosition(): Vector;
    public function setPosition(Vector $position);
    public function getVelocity(): Vector;
}