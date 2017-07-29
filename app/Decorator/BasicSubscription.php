<?php

namespace App\Decorator;

class BasicSubscription implements Subscription
{
    public function price()
    {
        return 5;
    }

    public function description()
    {
        return 'Basic subscription';
    }
}