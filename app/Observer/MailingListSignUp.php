<?php

namespace App\Observer;

class MailingListSignUp extends Event
{
    public $user;

    public function __construct(User $user)
    {
        parent::__construct();

        $this->user = $user;
    }
}