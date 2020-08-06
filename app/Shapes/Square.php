<?php

namespace App\Shapes;

class Square
{
    private $dim;

    public function __construct(float $dim)
    {
        $this->dim = $dim;
    }

    public function area() : float
    {
        return $this->dim * $this->dim;
    }
}