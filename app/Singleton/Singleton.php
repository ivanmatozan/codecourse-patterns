<?php

namespace App\Singleton;

class Singleton
{
    private static $instance;

    /**
     * Prevent class instantiation from outside
     * of the class
     */
    private function __construct()
    {
        //
    }

    /**
     * Prevent object cloning
     */
    private function __clone()
    {
        //
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }

        return self::$instance;
    }
}