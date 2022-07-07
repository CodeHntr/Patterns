<?php

namespace Patterns\Flyweight;

class Flyweight
{
    private array $sharedState;

    public function __construct($sharedState)
    {
        $this->sharedState = $sharedState;
    }
    public function acceptData(array $uniqueState): void
    {
        $common = json_encode($this->sharedState);
        $unique = json_encode($uniqueState);
        echo "Flyweight: Відображення спільних ($common) і унікальних ($unique)<br />";
    }
}

