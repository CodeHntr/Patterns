<?php

namespace Patterns\AbstractFactory;


class NikeShorts implements Shorts
{
    public function pack(): string
    {
        return "Шорти'Nike' запаковано";
    }
}