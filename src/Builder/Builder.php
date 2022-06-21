<?php

namespace Patterns\Builder;

use Patterns\Builder\Parts\Furniture;

interface Builder
{
    public function createFurniture();

    public function addLeg();

    public function addCover();

    public function getFurniture();
}
