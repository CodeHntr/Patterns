<?php

namespace Patterns\Behavior\Command;


class Invoker
{

    private Command $onStart;

    private Command $onFinish;

    public function setOnStart(Command $command): void
    {
        $this->onStart = $command;
    }

    public function setOnFinish(Command $command): void
    {
        $this->onFinish = $command;
    }

    public function doSomethingImportant(): void
    {
        echo "Invoker: Хто виконає роботу перед початком моєї роботи?<br />";
        if ($this->onStart instanceof Command) {
            $this->onStart->execute();
        }

        echo "Invoker: ...робить дещо важливе...<br />";

        echo "Invoker: Можливо хтось бажає зробити щось перед тим, як я завершу?<br />";

        if ($this->onFinish instanceof Command) {
            $this->onFinish->execute();
        }
    }
}