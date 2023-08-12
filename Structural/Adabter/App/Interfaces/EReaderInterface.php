<?php

interface EReaderInterface
{
    public function turnOn(): void;
    public function nextPage(): void;
}