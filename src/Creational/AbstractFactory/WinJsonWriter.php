<?php

namespace DesignPatterns\Creational\AbstractFactory;

class WinJsonWriter implements JsonWriter
{
    public function write($data, $formatted): string
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}
