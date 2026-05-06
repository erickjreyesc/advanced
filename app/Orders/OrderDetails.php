<?php

namespace App\Orders;

use App\Billing\IPaymentGatewayContract;

class OrderDetails
{
    public function __construct(
        private IPaymentGatewayContract $payment
    ) {}

    public function get(): array
    {
        $this->payment->setDiscount(580);

        return [
            'name' => 'Greg',
            'address' => '321 White Street'
        ];
    }
}
