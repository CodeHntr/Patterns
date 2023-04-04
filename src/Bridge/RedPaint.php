<?php

namespace Patterns\Bridge;

class RedPaint implements Paint
{
    public function setColor(): string
    {
        return "Червоний колір";
    }

}