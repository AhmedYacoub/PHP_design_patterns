<?php

require_once 'CappuccinoDecorator.php';

class ArtisticDrawing extends CappuccinoDecorator
{
    private const PRICE = 2;

    public function getPrice(): int
    {
        return $this->cappuccino->getPrice() + self::PRICE;
    }
}