<?php


namespace Patterns\Architectural\MVC;

class View
{
    public function listMessages(array $messages)
    {
        foreach ($messages as $id => $message) {
            echo $id . " => " . $message . "<br>\n";
        }
    }

}
