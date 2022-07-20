<?php

namespace Patterns\Behavior\Template;

class ConcreteClass2 extends AbstractClass
{
    protected function requiredOperations1(): void
    {
        echo "ConcreteClass2: Вставновити вікно<br />";
    }

    protected function requiredOperation2(): void
    {
        echo "ConcreteClass2: реалізована операція 2<br />";
    }

    protected function hook1(): void
    {
        echo "ConcreteClass2 каже: Перевизначений Hook1<br />";
    }
}
