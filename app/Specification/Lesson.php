<?php

namespace App\Specification;

class Lesson
{
    public $active;

    public function __construct($active = true)
    {
        $this->active = $active;
    }
}