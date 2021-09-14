<?php

namespace DesignPatterns\Creational\FactoryMethod;

abstract class Creator
{
    abstract public function factoryMethod(): Product;

    public function someOperation(): string
    {
        $product = $this->factoryMethod();

        return "Creator: The same creator's code has just worked".$product->operation();
    }
}
