<?php

namespace DesignPatterns\Creational\Singleton1;

class Config
{
    use Singleton;

    private array $hashmap = [];

    public function getValue(string $key): string
    {
        return $this->hashmap[$key];
    }

    public function setValue(string $key, string $value): void
    {
        $this->hashmap[$key] = $value;
    }
}
