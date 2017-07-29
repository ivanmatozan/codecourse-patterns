<?php

namespace App\Specification\Validation;

class Validator
{
    protected $rules = [];
    protected $input;

    public function __call($method, $args)
    {
        $this->rules[] = [
            'object' => $this->getRule($method),
            'argument' => $args
        ];

        return $this;
    }

    protected function getRule($rule)
    {
        $class = 'App\Specification\Validation\\' . ucfirst($rule);

        return new $class;
    }

    public function withInput($input)
    {
        $this->input = $input;

        return $this;
    }

    public function isValid()
    {
        foreach ($this->rules as $rule) {
            if (!$rule['object']->isSatisfiedBy($this->input, $rule['argument'])) {
                return false;
            }
        }

        return true;
    }
}