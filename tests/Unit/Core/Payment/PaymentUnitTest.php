<?php

namespace Tests\Unit\Core\Payment;

use Core\Payment\PaymentController;
use Core\Payment\PaymentInterface;
use Mockery;
use PHPUnit\Framework\TestCase;
use stdClass;

class PaymentUnitTest extends TestCase
{
    // protected function setUp(): void
    // {
    // }

    public function testCategory()
    {
        // arrange
        $mockPayment = Mockery::mock(stdClass::class, PaymentInterface::class);
        $mockPayment->shouldReceive('makePayment')->andReturn(true)->times(1);

        $payment = new PaymentController($mockPayment);
        
        // action
        $response = $payment->execute();

        // assert
        $this->assertTrue($response);
        // Mockery::close();
    }

    protected function tearDown(): void
    {
        Mockery::close();

        parent::tearDown();
    }
}