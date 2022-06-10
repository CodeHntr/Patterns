<?php

include("PhoneInterface.php");
include("CellPhone.php");
include("SmartPhone.php");
include("PhoneFactory.php");

$factory = new PhoneFactory();
$cell_phone = $factory->createCellPhone();
$smart_phone = $factory->createSmartPhone();

$cell_phone->call();
echo "<br>";
$smart_phone->call();