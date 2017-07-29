<?php

namespace App\Strategy\Config\Parser;

use App\Strategy\Config\Contracts\ParserInterface;

class JsonParser implements ParserInterface
{
    public function parse($file)
    {
        return json_decode(file_get_contents($file), true);
    }
}