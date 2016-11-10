<?php declare(strict_types = 1);

namespace ProjectFunTime\Exceptions;

use \Exception;

class UnknownException extends Exception
{
   public function __construct($message, $code = 0, Exception $previous = null)
   {
      parent::__construct($message, $code, $previous);
   }
}