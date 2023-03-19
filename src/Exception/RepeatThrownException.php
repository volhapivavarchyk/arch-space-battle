<?php

declare(strict_types=1);

namespace App\Exception;

use Exception;

class RepeatThrownException extends Exception
{
    public function __construct($message = 'The exception is thrown twice', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}