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

    public function __construct(PDO $pdo, array $data = [])
    {
        $this->pdo = $pdo;
        $this->id = $data['id'] ?? 0;
        $this->address = $data['address'] ?? "";
        $this->state = $data['state'] ?? self::STATE_GREEN;
    }

    public function create(array $data)
    {
        $this->address = $data['address'];
        $this->state = $data['state'];

        $sql = sprintf(
            "INSERT INTO `%s` (`address`, `state`) VALUES ('%s', '%d')",
            $this->table,
            $this->address,
            $this->state
        );
        $this->pdo->query($sql);
        $this->id = $this->pdo->lastInsertId();
        return $this;
    }

    public function update(int $state, int $id)
    {
        $sql = sprintf("UPDATE `%s` SET `state`='%d' WHERE (`id`='%d')", $this->table, $state, $id);
        $this->pdo->query($sql);
    }


}

