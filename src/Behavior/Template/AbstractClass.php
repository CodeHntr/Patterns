<?php

namespace Patterns\Behavior\Template;

abstract class AbstractClass
{
    final public function templateMethod(): void
    {
        $this->baseOperation1();
        $this->requiredOperations1();
        $this->baseOperation2();
        $this->hook1();
        $this->requiredOperation2();
        $this->baseOperation3();
        $this->hook2();
    }

    protected function baseOperation1(): void
    {
        echo "AbstractClass говоре: Я роблю основну частину роботи<br />";
    }

    protected function baseOperation2(): void
    {
        echo "AbstractClass говоре: Але я дозволив підкласам перевизначати деякі операції<br />";
    }

    protected function baseOperation3(): void
    {
        echo "AbstractClass говоре: Але я всеодно роблю основну частину роботи<br />";
    }

    abstract protected function requiredOperations1(): void;

    abstract protected function requiredOperation2(): void;

    protected function hook1(): void
    {
    }

    protected function hook2(): void
    {
    }
}
