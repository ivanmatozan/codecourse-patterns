<?php

namespace App\Factory;

class UploaderFactory
{
    protected $adapter;

    public function __construct(AdapterFactory $adapter)
    {
        $this->adapter = $adapter;
    }

    public function make(Config $config)
    {
        return new Uploader($this->adapter->make($config));
    }
}