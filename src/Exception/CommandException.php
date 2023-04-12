<?php

declare(strict_types=1);

namespace App\Exception;

use Exception;

class CommandException extends Exception
{
    public function __construct($message = 'Something went wrong', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}