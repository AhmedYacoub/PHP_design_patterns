<?php

require_once 'Interfaces/CoffeeInterface.php';

class Cappuccino implements CoffeeInterface
{
    public function getPrice(): int
    {
        return 2;
    }
}