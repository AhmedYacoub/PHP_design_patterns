<?php

require_once 'Kindle.php';
require_once 'Interfaces/BookInterface.php';
require_once 'Interfaces/EReaderInterface.php';

class EReaderAdapter implements BookInterface
{
    public function __construct(private EReaderInterface $eReader)
    {
    }

    public function open(): void
    {
        $this->eReader->turnOn();
    }

    public function turnPage(): void
    {
        $this->eReader->nextPage();
    }
}