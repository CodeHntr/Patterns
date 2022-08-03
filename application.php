<?php

require './vendor/autoload.php';

use Patterns\Architectural\MVC\Controller;


$message = $argv[1];
$controller = new Controller();
$controller->addMessage($message);
$controller->showMessages();
