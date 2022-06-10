<?php

class StreetLight
{
    public static $name;
    private $field;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance(): StreetLight
    {
        if (self::$name === null) {
            self::$name = new self();
        }

        return self::$name;
    }

    public function getField()
    {
        return $this->field;
    }

    public function setField($field)
    {
        $this->field = $field;
    }
}

$streetlight = StreetLight::getInstance();
$streetlight->setField('On');

$streetlight2 = StreetLight::getInstance();
echo $streetlight2->getField();