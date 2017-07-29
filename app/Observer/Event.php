<?php

namespace App\Observer;

use SplObserver;
use SplSubject;
use SplObjectStorage;

abstract class Event implements SplSubject
{
    protected $storage;

    public function __construct()
    {
        $this->storage = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->storage->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        if (!$this->storage->contains($observer)) {
            $this->storage->detach($observer);
        }
    }

    public function notify()
    {
        if (!count($this->storage)) {
            return;
        }

        foreach ($this->storage as $observer) {
            $observer->update($this);
        }
    }
}