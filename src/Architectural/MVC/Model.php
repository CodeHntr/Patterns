<?php


namespace Patterns\Architectural\MVC;

class Model
{
    private array $messages = [];

    public function addMessage($message)
    {
        $this->messages[] = date("H:i:s") . " : " . $message;
    }

}
