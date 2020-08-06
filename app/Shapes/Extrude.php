<?php

namespace App\Shapes;

class Extrude
{
    private $shape;

    public function __construct(ShapeInterface $shape, int $extrude)
    {
       $this->shape = $shape;
       $this->extrude = $extrude;
    }

    public function volume()
    {
        return $this->shape->area() * $this->extrude;
    }
}