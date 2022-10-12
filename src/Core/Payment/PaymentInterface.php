<?php

namespace Core\Payment;

interface PaymentInterface
{
    public function cretePlan(array $data): bool;
    public function findClientById(string $id): ?object;
    public function makePayment(array $data): bool;
}