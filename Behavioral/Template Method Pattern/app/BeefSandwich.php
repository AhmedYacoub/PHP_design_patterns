<?php

namespace App;

use App\Sandwich;

class BeefSandwich extends Sandwich
{
    protected function applyPrimaryTopping(): self
    {
        echo 'Adding a piece of beef..' . PHP_EOL;

        return $this;
    }
}