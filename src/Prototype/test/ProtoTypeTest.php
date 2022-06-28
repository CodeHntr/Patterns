<?php

namespace Patterns\Prototype\test;

use Patterns\Prototype\Bmw;
use Patterns\Prototype\Mercedes;
use PHPUnit\Framework\TestCase;

class ProtoTypeTest extends TestCase
{
    public function testCanGetBmwCar()
    {
        $bmwProt = new Bmw();


        for ($i = 0; $i < 10; $i++) {
            $bmw = clone $bmwProt;
            $this->assertInstanceOf(Bmw::class, $bmw);
            $body = 'Car Bmw' . $i;
            $bmw->setCarBody($body);
            $this->assertEquals($body, $bmw->getCarBody());
        }
    }


    public function testCanGetMercedes()
    {
        $mercedesProt = new Mercedes();

        for ($i = 0; $i < 5; $i++) {
            $mercedes = clone $mercedesProt;
            $this->assertInstanceOf(Mercedes::class, $mercedes);
            $body = 'Car Mercedess' . $i;
            $mercedes->setCarBody($body);
            $this->assertEquals($body, $mercedes->getCarBody());
        }
    }
}