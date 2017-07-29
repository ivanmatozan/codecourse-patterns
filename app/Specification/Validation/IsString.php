<?php

namespace App\Specification\Validation;

class IsString
{
    public function isSatisfiedBy($input)
    {
        return is_string($input);
    }
}