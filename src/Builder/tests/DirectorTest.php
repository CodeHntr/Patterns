<?php

namespace Patterns\Builder\Parts;

require "./vendor/autoload.php";

use Patterns\Builder\Parts\Chair;
use Patterns\Builder\Parts\Table;
use Patterns\Builder\TableBuilder;
use Patterns\Builder\ChairBuilder;
use Patterns\Builder\Director;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTable()
    {
        $tableBuildor = new TableBuilder();
        $newFurniture = (new Director()->build($tableBuildor));

        $this->asertInstanceOf(Table::class, $newFurniture);
    }

    public function TestCanBuildChair()
    {
        $chairBuilder = new ChairBuilder();
        $newFurniture = (new Director()->build($chairBuilder));
        $this->asertInstanceOf(Chair::class, $newFurniture);
    }

}


