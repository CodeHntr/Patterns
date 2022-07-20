<?php

namespace Patterns\Behavior\Observer;


class Subject implements \SplSubject
{
    /**
     * @var int
     */
    public $state;

    /**
     * @var \SplObjectStorage
     */
    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }


    public function attach(\SplObserver $observer): void
    {
        echo "Subject: Прикріпив спостерігача.<br />";
        $this->observers->attach($observer);
    }


}

