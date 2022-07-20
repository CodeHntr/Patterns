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
            <li><a href='http://localhost/patterns/index.php?type=flyweight'>Flyweight</a></li>
            <li><a href='http://localhost/patterns/index.php?type=proxy'>Proxy</a></li>
        </ul>
    </li>
    <li>Behavioral
        <ul>
            <li><a href='http://localhost/patterns/index.php?type=chain'>Chain</a></li>
            <li><a href='http://localhost/patterns/index.php?type=command'>Command</a></li>
            <li><a href='http://localhost/patterns/index.php?type=iterator'>Iterator</a></li>
            <li><a href='http://localhost/patterns/index.php?type=mediator'>Mediator</a></li>
            <li><a href='http://localhost/patterns/index.php?type=memento'>Memento</a></li>
            <li><a href='http://localhost/patterns/index.php?type=observer'>Observer</a></li>
            <li><a href='http://localhost/patterns/index.php?type=state'>State</a></li>
            <li><a href='http://localhost/patterns/index.php?type=template'>Template</a></li>
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
use Patterns\Facade\Subsystem1;
use Patterns\Facade\Subsystem2;
use Patterns\Composite\Component;
use Patterns\Composite\Leaf;
use Patterns\Composite\Branch;
use Patterns\Composite\Fruit;
use Patterns\Flyweight\FlyweightFactory;
use Patterns\Proxy\Lyrics;
use Patterns\Proxy\CachingLyrics;
use Patterns\Behavior\Chain\Handler;
use Patterns\Behavior\Chain\SvitlanaHandler;
use Patterns\Behavior\Chain\MariaHandler;
use Patterns\Behavior\Chain\KatrinHandler;
use Patterns\Behavior\Command\ComplexCommand;
use Patterns\Behavior\Command\Invoker;
use Patterns\Behavior\Command\Receiver;
use Patterns\Behavior\Command\PrintName;
use Patterns\Behavior\Iterator\WordsCollection;
use Patterns\Behavior\Mediator\Component1;
use Patterns\Behavior\Mediator\Component2;
use Patterns\Behavior\Mediator\ConcreteMediator;
use Patterns\Behavior\Memento\Caretaker;
use Patterns\Behavior\Memento\Originator;
use Patterns\Behavior\Observer\Subject;
use Patterns\Behavior\Observer\Observer1;
use Patterns\Behavior\State\Context;
use Patterns\Behavior\State\ConcreteStateA;
use Patterns\Behavior\Template\AbstractClass;
use Patterns\Behavior\Template\ConcreteClass1;
use Patterns\Behavior\Template\ConcreteClass2;


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
    case "flyweight":
        flyweight();
        break;
    case "proxy":
        proxy();
        break;
    case "chain":
        chain();
        break;
    case "command":
        command();
        break;
    case "iterator":
        iterator();
        break;
    case "mediator":
        mediator();
        break;
    case "memento":
        memento();
        break;
    case "observer":
        observer();
        break;
    case "state":
        state();
        break;
    case "template":
        template();
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

//Testing Composite

function composite()
{
    echo "<h1>Composite</h1>";


    $simple = new Leaf("Я листок");
    echo "Result:" . $simple->getInfo();
    echo "<br />";

    $tree = new Branch();
    $branch2 = new Branch();
    $leaf1 = new Leaf("Листок");
    $leaf2 = new Leaf("Другий листок");
    $apple = new Fruit();
    $apple->add($leaf1);
    $tree->add($leaf1);
    $tree->add($leaf2);
    $tree->add($branch2);
    $tree->add($apple);
    echo $tree->getInfo() . "<br>";
    $tree->remove($leaf1);
    echo $tree->getInfo() . "<br>";
    $tree->remove($branch2);

    echo "Result:" . $tree->getInfo();
    echo "<br />";

    clientCodeComposite($tree, $simple);
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

//    $subsystem1 = new Subsystem1();
//    $subsystem2 = new Subsystem2();
    $facade = new Facade();

    clientCodeFacade($facade);
}

// Testing Flyweight

function flyweight()
{
    echo "<h1>Flyweight</h1>";

    $factory = new FlyweightFactory([
        ["Pilot", "35", "Lviv"],
        ["Driver", "28", "Kyiv"],
        ["Sailor", "22", "Odesa"],
        ["Engineer", "30", "Kharkiv"],
        ["Miner", "29", "Donetsk"],
    ]);

    $factory->listFlyweights();

    ClientCodeFlyweight($factory, "Dima", "Varchenko", "Pilot", "35", "Lviv");

    ClientCodeFlyweight($factory, "Dima", "Varchenko", "Sailor", "44", "Odessa");

    $factory->listFlyweights();
}

//Texting Proxy

function proxy()
{
    echo "<h1>Proxy</h1>";

    $lyrics = new Lyrics();
    echo "<pre>";
    echo $lyrics->getSongLyrics("Imagine");
    echo "</pre>";


    echo "<br />";

    $proxy = new CachingLyrics($lyrics);
    echo "<pre>";
    echo $proxy->getSongLyrics("Imagine");
    echo "</pre>";

    echo "<pre>";
    echo $proxy->getSongLyrics("Imagine");
    echo "</pre>";
}

function chain()
{
    echo "<h1>Chain</h1>";

    $svitlana = new SvitlanaHandler();
    $maria = new MariaHandler();
    $katrin = new KatrinHandler();

    $svitlana->setNext($maria)->setNext($katrin);

    echo "Chain: Svitlana > Maria > Katrin <br />";
    ClientCodeChain($svitlana);

    echo "Chain:  Maria > Katrin <br />";
    ClientCodeChain($maria);
}

function command()
{
    echo "<h1>Command</h1>";

    $invoker = new Invoker();
    $invoker->setOnStart(new PrintName("Pablo"));
    $receiver = new Receiver();
    $invoker->setOnFinish(new ComplexCommand($receiver, "Press button", "Save data"));

    $invoker->doSomethingImportant();
}

function iterator()
{
    echo "<h1>Iterator</h1>";

    $collection = new WordsCollection();
    $collection->addItem("Перший елемент");
    $collection->addItem("Другий елемент");
    $collection->addItem("Третій елемент");

    echo "<strong>Прямий обхід:</strong><br />";
    foreach ($collection->getIterator() as $item) {
        echo $item . "<br />";
    }

    echo "<strong>Зворотний обхід:</strong><br />";
    foreach ($collection->getReverseIterator() as $item) {
        echo $item . "<br />";
    }
}

function mediator()
{
    echo "<h1>Mediator</h1>";

    $c1 = new Component1();
    $c2 = new Component2();
    $mediator = new ConcreteMediator($c1, $c2);

    echo "Client Викликає функцію вишню.<br />";
    $c1->getCherry();

    echo "<br />";
    echo "Client викликає бджолу<br />";
    $c2->getBee();
}

function memento()
{
    echo "<h1>Memento</h1>";

    $originator = new Originator("super-duper-super-puper-super.");
    $caretaker = new Caretaker($originator);

    $caretaker->backup();
    $originator->doSomething();

    $caretaker->backup();
    $originator->doSomething();

    $caretaker->backup();
    $originator->doSomething();

    echo "<br />";
    $caretaker->showHistory();

    echo "<br />Client: Повертаємось назад<br /><br />";
    $caretaker->undo();

    echo "<br />Client: Ще раз.<br /><br />";
    $caretaker->undo();
}

function observer()
{
    echo "<h1>Observer</h1>";

    $subject = new Subject();

    $o1 = new Observer1();
    $subject->attach($o1);

    $o2 = new Observer2();
    $subject->attach($o2);

    $subject->getInfo();
    $subject->getInfo();

    $subject->detach($o2);

    $subject->getInfo();
}

function state()
{
    echo "<h1>State</h1>";

    $context = new Context(new ConcreteStateA());
    $context->request1();
    $context->request2();
}



/**
 *
 *
 *
 *CLIENT CODE FUNCTIONS
 *
 *
 *
 */
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

function clientCodeComposite(Component $component1, Component $component2)
{
    if ($component1->isComposite()) {
        $component1->add($component2);
    }

    echo "Result:" . $component1->getInfo();
}

function ClientCodeFlyweight(
    FlyweightFactory $ff,
    $name,
    $surname,
    $profession,
    $age,
    $from
) {
    echo "<br />Client: Вносимо дані до бази даних.";
    $flyweight = $ff->getFlyweight([$profession, $age, $from]);
    $flyweight->acceptData([$name, $surname]);
}

function ClientCodeChain(Handler $handler)
{
    foreach (["Olga", "Svitlana", "Maria", "Katrin", "Julia"] as $name) {
        echo "Client: What is  " . $name . " name?<br />";
        $result = $handler->handle($name);
        if ($result) {
            echo " " . $result;
        } else {
            echo " " . $name . " is absent <br />";
        }
    }
}

function clientCodeTemplate(AbstractClass $class)
{
    $class->templateMethod();
}


?>

</body>
</html>
