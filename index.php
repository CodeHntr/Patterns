<?php

namespace Patterns;

require './vendor/autoload.php';



//
//use Patterns\Singleton\StreetLight;
//
//use Patterns\AbstractFactory\AbstractFactory;
//use Patterns\AbstractFactory\AdidasFactory;
//use Patterns\AbstractFactory\NikeFactory;
//
//use Patterns\FactoryExample\WalletFactory;
//
//
//
//$factory = new WalletFactory();
//$PocketWallet = $factory->createPocketWallet();
//$EWallet = $factory->createEWallet();
//
//echo "<h1>Factory</h1>";
//echo $PocketWallet->replenish() . "<br/>";
//echo $PocketWallet->spend() . "<br/>";
//echo "<br/>";
//echo $EWallet->replenish() . "<br/>";
//echo $EWallet->spend() . "<br/>";
//
//
//
//
//
//echo "<h1>Singleton</h1>";
//
//$streetlight = StreetLight::getInstance();
//$streetlight->setField(100);
//
//$streetlight2 = StreetLight::getInstance();
//echo $streetlight->getField();
//echo $streetlight2->getField();
//
////
//
//
//echo "<h1>AbstractFactory</h1>";
//
////Testing AbstractFactory
//
//function getForm(AbstractFactory $factory)
//{
//    $sneakers = $factory->createSneakers();
//    $shorts = $factory->createShorts();
//    $tshirt = $factory->createTShirt();
//
//    echo $tshirt->pack() . "<br />";
//    echo $shorts->pack() . "<br />";
//    echo $sneakers->pack() . "<br />";
//}
//
//getForm(new AdidasFactory());
//echo "<br />";
//getForm(new NikeFactory());
//

