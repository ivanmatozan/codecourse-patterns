<?php

namespace App\Factory;

class AdapterFactory
{
    public function make(Config $config)
    {
        switch ($config->get('upload.default')) {
            case 's3':
                return new S3Adapter();
                break;
            case 'ftp':
                return new FTPAdapter();
                break;
        }
    }
}