<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patterns</title>
</head>
<body>

<a href='http://localhost/patterns/index.php'><strong>Home</strong></a>

<ul>
    <li>Creational
        <ul>
            <li><a href='http://localhost/patterns/index.php?type=singletone'>SingleTone</a></li>
            <li><a href='http://localhost/patterns/index.php?type=abstractFactory'>Abstract Factory</a></li>
            <li><a href='http://localhost/patterns/index.php?type=factory'>Factory</a></li>
            <li><a href='http://localhost/patterns/index.php?type=builder'>Builder</a></li>
            <li><a href='http://localhost/patterns/index.php?type=prototype'>Prototype</a></li>
        </ul>
    </li>
    <li>Structure
        <ul>
            <li><a href='http://localhost/patterns/index.php?type=adapter'>Adapter</a></li>
            <li><a href='http://localhost/patterns/index.php?type=bridge'>Bridge</a></li>
            <li><a href='http://localhost/patterns/index.php?type=composite'>Composite</a></li>
            <li><a href='http://localhost/patterns/index.php?type=decorator'>Decorator</a></li>
            <li><a href='http://localhost/patterns/index.php?type=facade'>Facade</a></li>
        </ul>
    </li>

</ul>

<?php

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
use Patterns\Adapter\MyWallet;
use Patterns\Adapter\walletKindle;
use Patterns\Adapter\EWalletAdapter;
use Patterns\Bridge\Car;
use Patterns\Bridge\RedPaint;
use Patterns\Bridge\YellowPaint;
use Patterns\Bridge\BMW as BMWBridge;
use Patterns\Decorator\Phone;
use Patterns\Decorator\MyPhone;
use Patterns\Decorator\CoverDecorator;
use Patterns\Decorator\GlassDecorator;
use Patterns\Facade\Facade;
use Patterns\Facade\Subsystem2;
use Patterns\Facade\Subsystem1;
//use Patterns\Lightweight\FlyweightFactory;
//use Patterns\Proxy\Subject;
//use Patterns\Proxy\RealSubject;
//use Patterns\Proxy\Proxy;

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
    case "adapter":
        adapter();
        break;
    case "bridge":
        bridge();
        break;
    case "composite":
        composite();
        break;
    case "decorator":
        decorator();
        break;
    case "facade":
        facade();
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

// Testing Builder

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

// Testing Prototype

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
    $mercedesPrototype->setCarBody("Truck");
    $mercedes = clone $mercedesPrototype;
    $mercedes->setCarBody("sedan");
    echo "<pre>";
    var_dump($mercedesPrototype);
    echo "</pre>";
}

// Testing Adapter

function adapter()
{
    echo "<h1>Adapter</h1>";

    $wallet = new MyWallet();
    $wallet->open();
    $wallet->putMoney(700);
    $wallet->takeMoney(14);
    $wallet->takeMoney(35);
    $wallet->takeMoney(19);
    echo "В гаманці залишилось " . $wallet->getSum() . "uah <br />";

    $walletKindle = new walletKindle();
    $ewallet = new EWalletAdapter($walletKindle);

    $ewallet->open();
    $ewallet->putMoney(456);
    $ewallet->takeMoney(12);
    $ewallet->takeMoney(14);
    $ewallet->takeMoney(73);
    echo "На балансі " . $ewallet->getSum() . " uah ";
    echo "Ліміт " . $ewallet->getLimit() . " uah";
}

// Testing Bridge

function bridge()
{
    echo "<h1>Bridge</h1>";

    $implementation = new RedPaint();
    $abstraction = new Car($implementation);
    clientCodeBridge($abstraction);
    echo "<br />";

    $implementation2 = new YellowPaint();
    $abstraction2 = new BMWBridge($implementation2);
    clientCodeBridge($abstraction2);
}

function composite()
{
}

// Testing Decorator

function decorator()
{
    echo "<h1>Decorator</h1>";

    $simple = new MyPhone();
    echo "Отримав простий телефон<br />";
    clientCodeDecor($simple);
    echo "<br />";

    $decorator1 = new CoverDecorator($simple);
    $decorator2 = new GlassDecorator($decorator1);
    echo "Тепер у мене є декорований телефон:<br/>";
    clientCodeDecor($decorator2);
}

// Testing Facade

function facade()
{
    echo "<h1>Facade</h1>";

    $subsystem1 = new Subsystem1();
    $subsystem2 = new Subsystem2();
    $facade = new Facade($subsystem1, $subsystem2);

    clientCodeFacade($facade);
}

//Testing Lightweight

//function lightweight()
//{
//    echo "<h1>Lightweight</h1>";
//
//    $factory = new FlyweightFactory([
//        ["Chevrolet", "Camaro2018", "pink"],
//        ["Mercedes-benz", "c300", "black"],
//        ["Mercedes-benz", "c500", "red"],
//        ["BMW", "M5", "red"],
//        ["BMW", "x6", "white"],
//    ]);
//    $factory->listFlyweights();
//
//    function addCarToPoliceDatabase(
//        FlyweightFactory $ff,
//        $plates,
//        $owner,
//        $brand,
//        $model,
//        $color
//    ) {
//        echo "Client: Ddding a car to database.";
//        $flyweight = $ff->getFlyweight([$brand, $model, $color]);
//
//
//        // The client code either stores or calculates extrinsic state and passes it
//        // to the flyweight's methods.
//        $flyweight->operation([$plates, $owner]);
//    }
//
//    addCarToPoliceDatabase(
//        $factory,
//        "CL234IR",
//        "James Doe",
//        "BMW",
//        "M5",
//        "red",
//    );
//
//    addCarToPoliceDatabase(
//        $factory,
//        "CL234IR",
//        "James Doe",
//        "BMW",
//        "X1",
//        "red",
//    );
//
//    $factory->listFlyweights();
//}
//
//// Testing Subsitute
//
//function proxy()
//{
//    echo "<h1>Proxy</h1>";
//
//    echo "Client: Executing the client code with a real subject:";
//    $realSubject = new RealSubject();
//    clientCodeProxy($realSubject);
//
//    echo "<br />";
//
//    echo "Client: Executing the same client code with a proxy:";
//    $proxy = new Proxy($realSubject);
//    clientCodeProxy($proxy);
//}





// Clients functions

function clientCodeBridge(Car $abstraction)
{
    echo $abstraction->paint();
}

function clientCodeDecor(Phone $component)
{
    echo "RESULT: " . $component->apply();
}

function clientCodeFacade(Facade $facade)
{
    echo $facade->reaize();
}

//function clientCodeProxy(Subject $subject)
//{
//    $subject->request();
//}
//
?>

</body>
</html>
