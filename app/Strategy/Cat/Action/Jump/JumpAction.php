<?php

namespace App\Strategy\Cat\Action\Jump;

use App\Strategy\Cat\Contracts\JumpActionInterface;

class JumpAction implements JumpActionInterface
{
    public function jump()
    {
        return 'Jump!';
    }
}