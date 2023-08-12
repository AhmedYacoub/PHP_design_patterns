<?php

namespace App;

use App\Sandwich;

class ChickenSandwich extends Sandwich
{
    protected function applyPrimaryTopping(): self
    {
        echo 'Adding a piece of chicken..' . PHP_EOL;

        return $this;
    }
}
