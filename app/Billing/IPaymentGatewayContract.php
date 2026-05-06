<?php

namespace App\Billing;

interface IPaymentGatewayContract
{
    public function setDiscount(int $amount);

    public function charge(int $amount);

}
