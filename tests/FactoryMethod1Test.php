<?php

use DesignPatterns\Creational\FactoryMethod1\FileLogger;
use DesignPatterns\Creational\FactoryMethod1\FileLoggerFactory;
use DesignPatterns\Creational\FactoryMethod1\StdoutLogger;
use DesignPatterns\Creational\FactoryMethod1\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethod1Test extends TestCase
{
    public function testCanCreateStdoutLogger()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogger()
    {
        $loggerFactory = new FileLoggerFactory($filePath = '');
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}
