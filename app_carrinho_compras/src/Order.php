<?php

namespace src;

use src\CarrinhoCompra;

class Order
{

    // attributes
    private $status;
    private $shoppingCart;
    private $value;

    // methods
    public function __construct()
    {
        $this->status = 'open';
        $this->shoppingCart = new CarrinhoCompra();
        $this->value = 0;
    }

    public function getShoppingCart()
    {
        return $this->shoppingCart;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    public function confirmOrder()
    {
        if ($this->shoppingCart->validateCart()) {
            $this->setStatus('confirmed');
            return true;
        }
        return false;
    }
}
