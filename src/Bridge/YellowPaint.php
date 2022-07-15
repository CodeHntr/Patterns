<?php

namespace Patterns\Bridge;

class YellowPaint implements Paint
{
    public function setColor(): string
    {
        return "Жовтий колір";
    }

}