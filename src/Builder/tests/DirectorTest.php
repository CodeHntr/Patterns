<?php

namespace Patterns\Builder\Parts;

require "./vendor/autoload.php";

use Patterns\Builder\TableBuilder;
use Patterns\Builder\ChairBuilder;
use Patterns\Builder\Director;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTable()
    {
        $tableBuilder = new TableBuilder();
        $newFurniture = (new Director())->build($tableBuilder);

        $this->assertInstanceOf(Table::class, $newFurniture);
    }

    public function TestCanBuildChair()
    {
        $chairBuilder = new ChairBuilder();
        $newFurniture = (new Director())->build($chairBuilder);

        $this->assertInstanceOf(Chair::class, $newFurniture);
    }


}


