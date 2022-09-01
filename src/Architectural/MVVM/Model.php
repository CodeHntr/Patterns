<?php

namespace Patterns\Architectural\MVVM;

interface Model
{
    public function create(array $data);

    public function update(int $state, int $id);

    public function getById(int $id);

    public function delete(int $id);
}
