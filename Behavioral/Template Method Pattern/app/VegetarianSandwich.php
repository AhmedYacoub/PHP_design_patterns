<?php

namespace App;

use App\Sandwich;

class VegetarianSandwich extends Sandwich
{
    protected function applyPrimaryTopping(): self
    {
        echo 'Adding some veggies..' . PHP_EOL;

        return $this;
    }
}