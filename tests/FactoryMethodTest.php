<?php

use DesignPatterns\Creational\FactoryMethod\ConcreteCreator1;
use DesignPatterns\Creational\FactoryMethod\ConcreteCreator2;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testRun()
    {
        $creator1 = new ConcreteCreator1();
        $product1 = $creator1->factoryMethod();

        $this->assertEquals('{Result of the ConcreteProduct1}', $product1->operation());

        $creator2 = new ConcreteCreator2();
        $product2 = $creator2->factoryMethod();
        $this->assertEquals('{Result of the ConcreteProduct2}', $product2->operation());
    }
}
