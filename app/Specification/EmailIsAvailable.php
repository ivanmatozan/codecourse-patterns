<?php

namespace App\Specification;

class EmailIsAvailable
{
    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function isSatisfiedBy($email)
    {
        if ($this->repository->getUserByEmail($email)) {
            return false;
        }

        return true;
    }
}