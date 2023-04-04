<?php

namespace Patterns\Flyweight;

class FlyweightFactory
{

    private $flyweights = [];

    public function __construct(array $initialFlyweights)
    {
        foreach ($initialFlyweights as $state) {
            $this->flyweights[$this->getKey($state)] = new Flyweight($state);
        }
    }

    private function getKey(array $state): string
    {
        ksort($state);

        return implode("_", $state);
    }

    public function getFlyweight(array $sharedState): Flyweight
    {
        $key = $this->getKey($sharedState);

        if (!isset($this->flyweights[$key])) {
            $this->flyweights[$key] = new Flyweight($sharedState);
        }

        return $this->flyweights[$key];
    }

    public function listFlyweights(): void
    {
        $count = count($this->flyweights);
        echo "FlyweightFactory: У мене $count Легковаговиків: <br />";

        foreach ($this->flyweights as $index => $flyweight) {
            echo $index . "<br />";
        }
    }
}
