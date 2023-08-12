<?php

require_once 'Interfaces/CoffeeInterface.php';

abstract class CappuccinoDecorator implements CoffeeInterface
{
    public function __construct(protected CoffeeInterface $cappuccino)
    {
    }

    public function getPrice(): int
    {
        return $this->cappuccino->getPrice();
    }
}
