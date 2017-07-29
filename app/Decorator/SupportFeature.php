<?php

namespace App\Decorator;

class SupportFeature extends SubscriptionFeature
{
    public function price()
    {
        return $this->subscription->price() + 1;
    }

    public function Description()
    {
        return $this->subscription->description() . ' + Support feature';
    }
}