<?php

namespace src;

class Item
{

    // attributes
    private $description;
    private $value;

    // methods
    public function __construct()
    {
        $this->description = '';
        $this->value = 0;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setValue(float $value)
    {
        $this->value = $value;
    }

    public function validItem()
    {
        if ($this->description == '') {
            return false;
        }
        if ($this->value <= 0) {
            return false;
        }
        return true;
    }
}
