<?php
/**
 * Todo:
 * 3. Що таке Реквест і глобальні масиви змінних
 *
 */

namespace Patterns;

require './vendor/autoload.php';


use Patterns\Builder\ChairBuilder;
use Patterns\Builder\Director;
use Patterns\Builder\TableBuilder;
use Patterns\Singleton\StreetLight;
use Patterns\AbstractFactory\AbstractFactory;
use Patterns\AbstractFactory\AdidasFactory;
use Patterns\AbstractFactory\NikeFactory;
use Patterns\FactoryExample\WalletFactory;
use Patterns\Prototype\Bmw;
use Patterns\Prototype\Mercedes;


echo "<ul>

<li><a href='http://localhost/patterns/index.php?type=singletone'>SingleTone</a></li>
<li><a href='http://localhost/patterns/index.php?type=abstractFactory'>Abstract Factory</a></li>
<li><a href='http://localhost/patterns/index.php?type=factory'>Factory</a></li>
<li><a href='http://localhost/patterns/index.php?type=builder'>Builder</a></li>
<li><a href='http://localhost/patterns/index.php?type=prototype'>Prototype</a></li>

</ul>";


switch ($_REQUEST['type']):
    case "singletone":
        singleTone();
        break;
    case "abstractFactory":
        AbstractFactory();
        break;
    case "factory":
        factory();
        break;
    case "builder":
        builder();
        break;
    case "prototype":
        prototype();
        break;


endswitch;

//Testing SingleTone

function singleTone()
{
    echo "<h1>Singleton</h1>";

    $streetlight = StreetLight::getInstance();
    $streetlight->setField(100);

    $streetlight2 = StreetLight::getInstance();
    echo $streetlight->getField();
    echo $streetlight2->getField();
}

function AbstractFactory()
{
    echo "<h1>AbstractFactory</h1>";

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
}

//Testing Factory

function factory()
{
    $factory = new WalletFactory();
    $PocketWallet = $factory->createPocketWallet();
    $EWallet = $factory->createEWallet();

    echo "<h1>Factory</h1>";
    echo $PocketWallet->replenish() . "<br/>";
    echo $PocketWallet->spend() . "<br/>";
    echo "<br/>";
    echo $EWallet->replenish() . "<br/>";
    echo $EWallet->spend() . "<br/>";
}

function builder()
{
    echo "<h1>Builder</h1>";

    $chair = (new Director())->build(new ChairBuilder());
    var_dump($chair);
    echo "<pre>";
    print_r($chair->getParts());
    echo "</pre>";

    $table = (new Director())->build(new TableBuilder());
    var_dump($table);
    echo "<pre>";
    print_r($table->getParts());
    echo "</pre>";
}

function prototype()
{
    echo "<h1>Prototype</h1>";

    $bmwPrototype = new Bmw();
    $bmw = clone $bmwPrototype;
    $bmw->setCarBody("Cabrio");
    echo "<pre>";
    var_dump($bmw);
    echo "</pre>";

    $mercedesPrototype = new Mercedes();
    $mercedes = clone $mercedesPrototype;
    $mercedes->setCarBody("Truck");
    echo "<pre>";
    var_dump($mercedes);
    echo "</pre>";
}

