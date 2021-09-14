<?php

namespace DesignPatterns\Creational\FactoryMethod;

class ConcreteCreator1 extends Creator
{
    public function factoryMethod(): Product
    {
       return new ConcreteProduct1();
    }
}