<?php

namespace App\Factory;

class Uploader
{
    protected $adapter;

    public function __construct($adapter)
    {
        $this->adapter = $adapter;
    }

    public function upload($file, $destination)
    {
        return $this->adapter;
    }
}