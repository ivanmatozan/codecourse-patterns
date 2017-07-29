<?php

namespace App\Factory;

class Config
{
    protected $data = [
        'upload' => [
            'default' => 's3',
            'services' => [
                's3' => [
                    'key' => '123',
                    'secret' => '456'
                ],
                'ftp' => [
                    'host' => 'abc'
                ]
            ]
        ]
    ];

    public function get($keys)
    {
        $data = $this->data;
        $keys = explode('.', $keys);

        foreach ($keys as $key) {
            if (array_key_exists($key, $data)) {
                $data = $data[$key];
                continue;
            }
        }

        return $data;
    }
}