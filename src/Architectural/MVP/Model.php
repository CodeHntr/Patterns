<?php

namespace Patterns\Architectural\MVP;

class Model
{
    private int $number;

    public function generateNum()
    {
        $this->number = mt_rand(mt_rand(0, 10), mt_rand(10, 20));

    }

}