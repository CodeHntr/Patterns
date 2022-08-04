<?php

namespace Patterns\Architectural\MVP;

class Presenter
{
    private $model;
    private $view;

    public function __construct(Model $model, View $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

}

