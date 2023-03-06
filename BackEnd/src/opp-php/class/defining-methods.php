<?php

class Basket
{
    public $itemsTotal;
    public $shippingCost;
    public $discount;

    public function calculateSubTotal()
    {  // Rewrite this so that discount is deducted
        $subTotal = $this->itemsTotal + $this->shippingCost - $this->discount;

        return $subTotal;
    }
}




$basket = new Basket();

$basket->itemsTotal = 50;
$basket->shippingCost = 10;
$basket->discount = 30;



var_dump($basket->calculateSubTotal());
