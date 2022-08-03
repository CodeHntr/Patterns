<?php

namespace Patterns\Architectural\MVC;


class Controller
{
    public function showMessages()
    {
        $model = new Model();
        $messages = $model->getMessages();
        $view = new View();
        $view->listMessages($messages);
    }

    public function addMessage(string $message)
    {
        $model = new Model();
        $model->addMessage($message);
        $model->saveMessages();
    }
}
