<?php

declare(strict_types=1);

namespace App\Library;

class CD implements TitledInterface
{
    private $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function title() : string
    {
        return $this->title;
    }
}