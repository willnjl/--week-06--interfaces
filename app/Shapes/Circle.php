<?php

namespace App\Shapes;

class Circle implements ShapeInterface
{
    private $r;

    public function __construct(int $r)
    {
        $this->r = $r;
    }
    
    public function area() : float
    {
        $pi = 3.141;
        return $pi * ($this->r * $this->r);
    }
}