<?php

use DesignPatterns\Creational\Singleton1\Logger;
use PHPUnit\Framework\TestCase;

class Singleton1Test extends TestCase
{
    public function testInstances()
    {
        $log1 = Logger::getInstance();
        $log2 = Logger::getInstance();

        $this->assertSame($log1, $log2);

        Logger::log('test1');
        Logger::log('test2');
    }
}
