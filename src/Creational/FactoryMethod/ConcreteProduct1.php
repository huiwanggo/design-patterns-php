<?php

namespace DesignPatterns\Creational\FactoryMethod;

class ConcreteProduct1 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}