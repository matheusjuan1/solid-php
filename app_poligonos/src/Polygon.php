<?php

namespace src;

class Polygon
{

    // attributes
    private $shape;

    // methods
    public function setShape(object $shape): void
    {
        $this->shape = $shape;
    }

    function getShape(): object
    {
        return $this->shape;
    }

    public function getArea(): float
    {
        return $this->getShape()->getHeight() * $this->getShape()->getWidth();
    }
}
