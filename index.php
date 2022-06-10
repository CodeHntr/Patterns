<?php

namespace Patterns;

require './vendor/autoload.php';
require_once './src/AbstractFactory/AbstractFactory.php';
require_once './src/AbstractFactory/AdidasFactory.php';
require_once './src/AbstractFactory/NikeFactory.php';

use Patterns\Singleton\IamOnlyOne;



use Patterns\AbstractFactory\AbstractFactory;
//use Patterns\AbstractFactory\Shoes;
//use Patterns\AbstractFactory\Pants;
use Patterns\AbstractFactory\AdidasFactory;
use Patterns\AbstractFactory\NikeFactory;
//use Patterns\AbstractFactory\NikeSneakers;
//use Patterns\AbstractFactory\AdidasSneakers;
//use Patterns\AbstractFactory\NikeShorts;
//use Patterns\AbstractFactory\AdidasShorts;

echo "<h1>Singleton</h1> <br />";

$singleton = IamOnlyOne::getInstance();
$singleton->setField(100);

$singleton2 = IamOnlyOne::getInstance();
echo $singleton2->getField();

//


echo "<h1>AbstractFactory</h1> <br />";

//Testing AbstractFactory

function getForm(AbstractFactory $factory)
{
    $sneakers = $factory->createSneakers();
    $shorts = $factory->createShorts();
    $tshirt = $factory->createTShirt();

    echo $tshirt->pack() . "<br />";
    echo $shorts->pack() . "<br />";
    echo $sneakers->pack() . "<br />";
}

getForm(new AdidasFactory());
echo "<br />";
getForm(new NikeFactory());

