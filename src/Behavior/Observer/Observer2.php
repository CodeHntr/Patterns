<?php

namespace Patterns\Behavior\Observer;

use SplSubject;

class Observer2 implements \SplObserver
{
    public function update(SplSubject $subject): void
    {
        if ($subject->state == 0 || $subject->state >= 2) {
            echo "Підписник2: Павло отримав сповіщення<br />";
        } else {
            echo "Підписник2: Павло не отримав сповіщення<br />";
        }
    }
}