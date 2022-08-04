<?php

require './vendor/autoload.php';

use Patterns\Architectural\MVP\Model;
use Patterns\Architectural\MVP\View;
use Patterns\Architectural\MVP\Presenter;

$model   = new Model();
$view    = new View();

$presenter = new Presenter($model, $view);
$presenter->generateNum();


