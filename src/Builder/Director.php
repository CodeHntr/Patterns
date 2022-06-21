<?php


namespace Patterns\Builder;

use Patterns\Builder\Parts\Furniture;

class Director
{
    public function build(Builder $builder): Furniture
    {
        $this->createFurniture();
        $this->addLeg();
        $this->addCover();

        return $builder->getFurniture();
    }
}