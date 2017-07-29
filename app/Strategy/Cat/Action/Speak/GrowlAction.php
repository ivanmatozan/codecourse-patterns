<?php

namespace App\Strategy\Cat\Action\Speak;

use App\Strategy\Cat\Contracts\SpeakActionInterface;

class GrowlAction implements SpeakActionInterface
{
    public function speak()
    {
        return 'Growwwwl!';
    }
}