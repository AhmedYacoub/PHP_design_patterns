<?php

namespace App;
use App\Interfaces\Eatable;

abstract class Sandwich implements Eatable
{
    public function make(): self
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->applyPrimaryTopping()
            ->addSauce()
            ->wrap();
    }

    protected function layBread(): self
    {
        echo 'Laying bread..' . PHP_EOL;

        return $this;
    }

    protected function addLettuce(): self
    {
        echo 'Adding some lettuce..' . PHP_EOL;

        return $this;
    }

    protected abstract function applyPrimaryTopping(): self;

    protected function addSauce(): self
    {
        echo 'Adding some sauce..' . PHP_EOL;

        return $this;
    }

    protected function wrap(): self
    {
        echo 'Wrapping sandwich up' . PHP_EOL;

        return $this;
    }
}
