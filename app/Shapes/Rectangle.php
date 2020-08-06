<?php

namespace App\Shapes;

class Rectangle implements ShapeInterface
{
    private $w;
    private $h;

    public function __construct(float $w, float $h)
    {
        $this->w = $w;
        $this->h = $h;
    }

    public function area() : float
    {
        return $this->w * $this->h;
    }
}