<?php

namespace php\helpers\exceptions;

use Exception;

class InvalidArgumentException extends Exception {
    public function getName()
    {
        return 'Invalid Argument';
    }
}