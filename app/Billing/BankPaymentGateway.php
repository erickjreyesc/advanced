<?php

namespace App\Billing;

use Illuminate\Support\Str;

class BankPaymentGateway implements IPaymentGatewayContract
{
    public function __construct(
        private string $currency,
        private int $discount = 0
    ) {}

    public function setDiscount(int $amount)
    {
        $this->discount = $amount;
    }

    public function charge(int $amount): array
    {
        return [
            'amount' => $amount - $this->discount,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount
        ];
    }
}
