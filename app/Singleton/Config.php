<?php

namespace App\Singleton;

class Config extends Singleton
{
    public $data = [
        'db' => [
            'host' => 'localhost'
        ]
    ];
}