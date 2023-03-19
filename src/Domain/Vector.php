<?php

declare(strict_types=1);

namespace App\Domain;

class Vector
{
    private array $body;

    public function __construct(array $body)
    {
        $this->body = $body;
    }

    public static function plus(Vector $v1, Vector $v2): Vector
    {
        $newBody = [];

        for($i = 1; $i < count($v1->body); $i++) {
            $newBody[$i] = $v1->body[$i] + $v2->body[$i];
        }

        return new Vector($newBody);
    }
}