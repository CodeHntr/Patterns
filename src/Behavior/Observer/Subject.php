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

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
        echo "Subject: Видалив спостерігача";
    }

    public function notify(): void
    {
        echo "Суб'єкт: Сповіщення спостерігачів...<br />";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getInfo(): void
    {
        echo "<br />Subject: Рандомлю число<br />";
        $this->state = rand(0, 10);

        echo "Subject: Мій стан змінений до: {$this->state}<br /><br />";
        $this->notify();
    }
}
