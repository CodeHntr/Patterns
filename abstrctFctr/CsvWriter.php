<?php

namespace patterns\AbstractFactory;

interface CsvWriter
{
    public function write(array $line): string;
}