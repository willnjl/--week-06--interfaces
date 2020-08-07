<?php

namespace App\Tricksy;

use Iterator;

class Alphabet implements Iterator
{
    private $pointer;

    public function rewind() : void
    {
        $this->pointer = 65;
    }
 
    public function valid() : bool
    {
        return $this->pointer < 91;
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
        return chr($this->pointer);
    }
}