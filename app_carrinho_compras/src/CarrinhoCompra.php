<?php

namespace src;

use src\Item;

class CarrinhoCompra
{

    // attributes
    private $items;

    // methods
    public function __construct()
    {
        $this->items = [];
    }

    public function getItems()
    {
        return $this->items;
    }

    public function addItem(Item $item)
    {
        array_push($this->items, $item);
        return true;
    }

    public function validateCart()
    {
        return count($this->items) > 0;
    }
}
