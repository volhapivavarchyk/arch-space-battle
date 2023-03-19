<?php

declare(strict_types=1);

namespace App\Exception;

use Exception;

class TwiceRepeatThrownException extends Exception
{
    public function __construct($message = 'The exception is thrown more than twi times', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}