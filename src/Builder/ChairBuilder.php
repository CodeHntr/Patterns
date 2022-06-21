<?php

namespace Patterns\Builder;

use Patterns\Builder\Builder;
use Patterns\Builder\Parts\Furniture;
use Patterns\Builder\Parts\Leg;
use Patterns\Builder\Parts\Cover;
use Patterns\Builder\Parts\Chair;


class ChairBuilder implements Builder
{
    private Furniture $chair;

    public function addLeg()
    {
        $this->chair->setPart('Front left', new Leg());
        $this->chair->setPart('Front right', new Leg());
        $this->chair->setPart('Backend right', new Leg());
        $this->chair->setPart('Backend left', new Leg());
    }

    public function addCover()
    {
        $this->chair->setPart('Seat Cover', new Cover());
    }

    public function createFurniture()
    {
        $this->chair = new Chair();
    }

    public function getFurniture()
    {
        return $this->chair;
    }
}
