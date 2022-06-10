<?php

namespace Patterns\AbstractFactory;

interface AbstractFactory
{
    public function createSneakers(): Sneakers;
    public function createShorts(): Shorts;
    public function createTShirt(): TShirt;
}