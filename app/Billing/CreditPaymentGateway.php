<?php

namespace App\Billing;

use Illuminate\Support\Str;

class CreditPaymentGateway implements IPaymentGatewayContract
{

    public function __construct(
        private string $currency,
        private int $discount = 0
    ) {}

    public function setDiscount(int $amount)
    {
        $this->discount = $amount;
    }

    public function charge(int $amount)
    {
        $fees = $amount * 0.02;

        return [
            'amount' => ($amount - $this->discount) * $fees,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount,
            'fees' => $fees
        ];
    }
}
