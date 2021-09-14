<?php

namespace DesignPatterns\Creational\FactoryMethod;

class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}