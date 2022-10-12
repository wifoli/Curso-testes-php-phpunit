<?php 

namespace Core\Payment;

class PaymentController
{
    public function __construct(
        private PaymentInterface $payment
    ) {
    }

    public function execute(): bool
    {
        return $this->payment->makePayment([]);
    }


}