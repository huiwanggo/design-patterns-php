<?php

namespace DesignPatterns\Creational\FactoryMethod1;

class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}
