<?php

require_once 'Interfaces/BookInterface.php';

class Book implements BookInterface
{
    private int $page = 0;

    public function open(): void
    {
        echo 'Book is open' . PHP_EOL; 
    }

    public function turnPage(): void
    {
        echo 'Turned on page #' . ++$this->page . PHP_EOL;
    }
}