<?php

namespace Tests\Unit\Core\Orders;

use PHPUnit\Framework\TestCase;
use Core\Orders\Customer;

class CustomerTest extends TestCase
{
    public function testAttributes()
    {
        $customer = new Customer(
            name: "Leandro Willian"
        );

        $this->assertEquals("Leandro Willian", $customer->getName());

        $customer->changeName(
            name: "new Name"
        );

        $this->assertEquals("new Name", $customer->getName());

        $this->assertTrue(true);
    }
}
