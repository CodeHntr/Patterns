<?php

namespace Patterns\Bridge;

class Car
{
    protected $carPaint;

    public function __construct(Paint $carPaint)
    {
        $this->carPaint = $carPaint;
    }

    public function paint(): string
    {
        return "Авто пофарбоване у: " . $this->carPaint->setColor();
    }
}
