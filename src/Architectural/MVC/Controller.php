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

}
