<?php

namespace App\Observer;

use SplObserver;
use SplSubject;

class SubscribeUserToService implements SplObserver
{
    public function update(SplSubject $event)
    {
        var_dump('Subscribe user to Mailchimp: ' . $event->user->email);
    }
}