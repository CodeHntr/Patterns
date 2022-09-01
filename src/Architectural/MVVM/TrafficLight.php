<?php


namespace Patterns\Architectural\MVVM;

use PDO;

class TrafficLight implements Model
{
    public const STATE_GREEN = 1;
    public const STATE_YELLOW = 2;
    public const STATE_RED = 3;

    private string $table = 'traffic_lights';
    protected PDO $pdo;
    public int $id;
    public string $address;
    public int $state;


}

