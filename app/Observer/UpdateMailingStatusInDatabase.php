<?php

namespace App\Observer;

use SplObserver;
use SplSubject;

class UpdateMailingStatusInDatabase implements SplObserver
{
    public function update(SplSubject $event)
    {
        var_dump('Update status in DB: ' . $event->user->id);
    }
}