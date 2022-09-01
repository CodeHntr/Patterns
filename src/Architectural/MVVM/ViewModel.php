<?php

namespace Patterns\Architectural\MVVM;

use PDO;

class ViewModel
{
    protected PDO $pdo;
    protected array $data;

    public function __construct(PDO $pdo, $data = [])
    {
        $this->pdo = $pdo;
        $this->data = $data;

    }

    function create(array $data)
    {
        $trafficLight = new TrafficLight($this->pdo, $data);
        $result = $trafficLight->create($data);
        return $result;
    }

    public function getById(int $id)
    {
        $trafficLight = new TrafficLight($this->pdo);

        $trafficLight = $trafficLight->getById($id);
        return json_encode($trafficLight, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
    }

    public function getAll()
    {
        $trafficLight = new TrafficLight($this->pdo);
        return $trafficLight->getAll();
    }



}