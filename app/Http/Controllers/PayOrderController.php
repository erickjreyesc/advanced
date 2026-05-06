<?php

namespace App\Http\Controllers;

use App\Billing\IPaymentGatewayContract;
use App\Orders\OrderDetails;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, IPaymentGatewayContract $paymentGateway): void
    {
        $order = $orderDetails->get();

        dd($paymentGateway->charge(2500));
    }
}
