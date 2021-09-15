<?php

namespace DesignPatterns\Creational\AbstractFactory;

interface WriterFactory
{
    public function createJsonWriter(): JsonWriter;

    public function createCsvWriter(): CsvWriter;
}
