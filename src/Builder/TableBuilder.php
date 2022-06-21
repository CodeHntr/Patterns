<?php

namespace Patterns\Builder;

use Patterns\Builder\Builder;
use Patterns\Builder\Parts\Furniture;
use Patterns\Builder\Parts\Leg;
use Patterns\Builder\Parts\Cover;
use Patterns\Builder\Parts\Table;

class TableBuilder implements Builder
{
    private Furniture $table;

    public function addLeg()
    {
        $this->table->setPart('Front right', new Leg());
        $this->table->setPart('Front left', new Leg());
        $this->table->setPart('Backend right', new Leg());
        $this->table->setPart('Backend left', new Leg());
    }

    public function addCover()
    {
        $this->table->setPart('Table covver', new Cover());
    }

    public function createFurniture()
    {
      $this->table = new Table();
    }

    public function getFurniture()
    {
        return $this->table;
    }
}

