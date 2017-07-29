<?php

namespace App\Strategy\Config;

use App\Strategy\Config\Contracts\ParserInterface;

class Config
{
    private $parser;

    protected $config;

    public function __construct(ParserInterface $parser)
    {
        $this->setParser($parser);
    }

    public function setParser(ParserInterface $parser)
    {
        $this->parser = $parser;
    }

    public function load($file)
    {
        $this->config = $this->parser->parse($file);
    }

    public function get($key, $default = null)
    {
        $keys = explode('.', $key);
        $config = $this->config;

        foreach ($keys as $key) {
            if (isset($config[$key])) {
                $config = $config[$key];
                continue;
             } else {
                $config = $default;
                break;
            }
        }

        return $config;
    }
}