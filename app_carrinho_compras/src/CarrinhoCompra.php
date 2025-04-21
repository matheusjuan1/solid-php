<?php

namespace App;

class CarrinhoCompra
{
    // attributes
    private $items;
    private $status;
    private $total;

    // methods
    public function __construct()
    {
        $this->items = [];
        $this->status = 'open';
        $this->total = 0;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function addItem(string $item, float $value)
    {
        array_push($this->items, ["item" => $item, "value" => $value]);
        $this->total += $value;
        return true;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function confirmOrder()
    {
        if ($this->validateCart()) {
            $this->status = 'closed';
            $this->sendConfirmationEmail();

            return true;
        }
        return false;
    }

    public function sendConfirmationEmail()
    {
        echo '<br />... envia e-mail de confirmação ... <br />';
    }

    public function validateCart()
    {
        return count($this->items) > 0;
    }
}
