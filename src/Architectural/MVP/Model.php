<?php

namespace Patterns\Architectural\MVP;

class Model
{
    private int $number;

    public function generateNum()
    {
        $this->number = mt_rand(mt_rand(0, 10), mt_rand(10, 20));

    }

    public function saveNum()
    {
        file_put_contents('numbers.txt', $this->number);
    }

    public function getNum()
    {
        $this->number = file_get_contents('numbers.txt');
        return $this->number;
    }
}