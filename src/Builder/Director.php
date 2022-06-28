<?php


namespace Patterns\Builder;

use Patterns\Builder\Parts\Furniture;

class Director
{
    public function build(Builder $builder): Furniture
    {
        $builder->createFurniture();
        $builder->addLeg();
        $builder->addCover();

        return $builder->getFurniture();
    }
}