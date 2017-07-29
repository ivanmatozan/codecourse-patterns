<?php

namespace App\Strategy\Config\Parser;

use App\Strategy\Config\Contracts\ParserInterface;

class ArrayParser implements ParserInterface
{
    public function parse($file)
    {
        return require $file;
    }
}