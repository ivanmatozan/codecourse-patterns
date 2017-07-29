<?php

namespace App\Strategy\Cat\Action\Speak;

use App\Strategy\Cat\Contracts\SpeakActionInterface;

class MeowAction implements SpeakActionInterface
{
    public function speak()
    {
        return 'Meow';
    }
}