<?php

namespace Patterns\Singleton;

class IamOnlyOne
{
    public static $instance;

    private $field;

    private function __construct()
    {
    }

    public static function getInstance(): IamOnlyOne
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getField()
    {
        return $this->field;
    }

    public function setField($field)
    {
        $this->field = $field;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}




