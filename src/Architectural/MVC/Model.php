<?php


namespace Patterns\Architectural\MVC;

class Model
{
    private array $messages = [];

    public function addMessage($message)
    {
        $this->messages[] = date("H:i:s") . " : " . $message;
    }

    public function saveMessages()
    {
        $file = fopen("messages.txt", "a");
        foreach ($this->messages as $message) {
            fwrite($file, $message . "\n");
        }
    }

}
