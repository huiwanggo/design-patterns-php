<?php

use DesignPatterns\Creational\Singleton\Config;
use DesignPatterns\Creational\Singleton\Logger;
use DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $instance1 = Singleton::getInstance();
        $instance2 = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $instance1);
        $this->assertInstanceOf(Singleton::class, $instance2);
        $this->assertSame($instance1, $instance2);
    }

    public function testInstances()
    {
        $log1 = Logger::getInstance();
        $log2 = Logger::getInstance();

        $this->assertSame($log1, $log2);
        Logger::log('test1');
        Logger::log('test2');

        $config1 = Config::getInstance();
        $config2 = Config::getInstance();

        $this->assertSame($config1, $config2);

        $test = 'test';
        $config1->setValue('test', $test);

        $this->assertEquals($test, $config2->getValue('test'));
    }
}
