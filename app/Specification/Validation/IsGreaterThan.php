<?php

namespace App\Specification\Validation;

class IsGreaterThan
{
    public function isSatisfiedBy($input, $argument)
    {
        return strlen($input) > $argument[0];
    }
}