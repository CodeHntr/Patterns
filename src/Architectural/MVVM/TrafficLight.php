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

    public function getById(int $id)
    {
        $sql = sprintf("SELECT `id`, `address`, `state` FROM `%s` WHERE (`id`='%d')", $this->table, $id);
        $result = $this->pdo->query($sql);
        return new TrafficLight($this->pdo, $result->fetch());
    }

    public function getAll()
    {
        $trafficLights = [];
        $sql = sprintf("SELECT * FROM `%s` ", $this->table);
        $result = $this->pdo->query($sql);
        foreach($result->fetchAll() as $trafficLight){
            $trafficLights[] = new TrafficLight($this->pdo, $trafficLight);
        }
        return $trafficLights;
    }

    public function delete(int $id)
    {
        $sql = sprintf("DELETE FROM %s WHERE id=%d", $this->table, $id);
        $this->pdo->query($sql);
        return $this;
    }

    public function deleteAll()
    {
        $sql = sprintf("DELETE  FROM %s ", $this->table);
        $this->pdo->query($sql);
        return $this;
    }
}

