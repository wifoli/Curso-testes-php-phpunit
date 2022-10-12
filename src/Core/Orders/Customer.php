<?php

namespace Core\Orders;

class Customer
{
    public function __construct(
        protected string $name
    ) {
    }

    public function changeName(string $name)
    {
        $this->name = $name;
    }

    public function getname()
    {
        return $this->name;
    }
}
