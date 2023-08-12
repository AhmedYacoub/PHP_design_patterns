<?php

require_once 'CappuccinoDecorator.php';

class ExtraSugar extends CappuccinoDecorator
{
    private const PRICE = 1;

    public function getPrice(): int
    {
        return $this->cappuccino->getPrice() + self::PRICE;
    }
}
