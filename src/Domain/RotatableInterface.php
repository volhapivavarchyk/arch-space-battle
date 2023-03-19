<?php
namespace App\Domain;

interface RotatableInterface
{
    public function getDirection(): int;
    public function setDirection(int $direction);
    public function getAngularVelocity(): int;
    public function getMaxDirections(): int;
}