<?php

namespace src\polygons;

class Square
{
    // attributes
    protected $width;
    protected $height;

    // methods
    public function setWidth(float $width): void
    {
        $this->width = $width;
        $this->height = $width;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
        $this->width = $height;
    }

    public function getHeight(): float
    {
        return $this->height;
    }
}
