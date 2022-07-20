<?php

namespace Patterns\Behavior\Observer;

class Observer1 implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if ($subject->state < 3) {
            echo "Підписник1: Дмитро отримав сповіщення<br />";
        } else {
            echo "Димитро не отримав сповіщення<br />";
        }
    }
}