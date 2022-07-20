<?php

namespace Patterns\Behavior\Template;

class ConcreteClass1 extends AbstractClass
{
    protected function requiredOperations1(): void
    {
      echo "ConcreteClass1 каже: Реалізована операція1<br />";
    }

    protected function requiredOperation2(): void
    {
        echo "ConcreteClass1 каже: реалізована операція2<br />";
    }
}