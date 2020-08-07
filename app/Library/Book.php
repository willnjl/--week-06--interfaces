<?php

declare(strict_types=1);

namespace App\Library;

class Book implements TitledInterface
{
    private $currentPage = 1;
    private $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function read(int $n) : Book
    {
        $this->currentPage += $n;
        return $this;
    }

    public function currentPage() : int
    {
        return $this->currentPage;
    }

    public function title() : string
    {
        return $this->title;
    }
}