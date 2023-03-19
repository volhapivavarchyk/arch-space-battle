<?php
namespace App\Domain;

interface ObjectInterface
{
    public function get(string $property);
    public function set(string $property, $value);
}