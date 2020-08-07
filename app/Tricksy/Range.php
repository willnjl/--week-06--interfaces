<?php

namespace App\Tricksy;

use Iterator;

class Range implements Iterator
{
    private $min;
    private $max;
    private $pointer;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }

    public function rewind() : void
    {
        $this->pointer = $this->min;
    }
 
    public function valid() : bool
    {
        return $this->pointer <= $this->max;
    }
 
    public function next()
    {
        $this->pointer += 1;;
    }
 
    public function key()
    {
        return $this->pointer;
    }
 
    public function current() : string
    {
        return $this->pointer;
    }
}