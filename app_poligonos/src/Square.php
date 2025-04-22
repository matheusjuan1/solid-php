<?php

namespace src;

class Square extends Rectangle
{

    // methods
    public function setWidth(float $width): void
    {
        $this->width = $width;
        $this->height = $width;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
        $this->width = $height;
    }
}
