<?php

namespace App\Specification;

class IsActive
{
    public function isSatisfiedBy($item)
    {
        return $item->active === true;
    }
}