<?php

include("QuackInterface.php");
include("FlyInterface.php");
include("HighQuack.php");
include("FlyWithWings.php");
include("FlyWithoutWings.php");
include("Duck.php");
include("RedHeadDuck.php");


$red_head_duck = new RedHeadDuck();
$red_head_duck->fly();
echo "<br />";
$red_head_duck->quack();
echo "<br />";
var_dump($red_head_duck);