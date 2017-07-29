<?php

namespace App\Strategy\Config\Contracts;

interface ParserInterface
{
    public function parse($file);
}