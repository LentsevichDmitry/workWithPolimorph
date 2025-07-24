<?php
interface PaymentMethod
{
    public function pay(float $amount): bool;
}

class CreditCard implements PaymentMethod
{
    public function pay(float $amount): bool
    {
        // TODO: Implement pay() method.
        echo "Оплата $amount руб. картой<br>";
        return true;
    }
}

class PayPal implements PaymentMethod
{
    public function pay(float $amount): bool
    {
        // TODO: Implement pay() method.
        echo "Оплата $amount руб. через PayPal<br>";
        return true;
    }
}

class Order
{
    public function process(PaymentMethod $payment, float $amount)
    {
        if ($payment->pay($amount))
        {
            echo "Заказ успешно оплачен!<br>";
        }
    }
}

$order = new Order();
$order->process(new CreditCard(), 1000);
$order->process(new PayPal(), 500);