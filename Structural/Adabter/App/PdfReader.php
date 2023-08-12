<?php

require_once 'Interfaces/EReaderInterface.php';

class PdfReader implements EReaderInterface
{
    private int $page = 0;

    public function turnOn(): void
    {
        echo 'PDF reader is turned on' . PHP_EOL; 
    }

    public function nextPage(): void
    {
        echo 'Switched to page #' . ++$this->page . PHP_EOL;
    }
}