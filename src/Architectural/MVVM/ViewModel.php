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



}