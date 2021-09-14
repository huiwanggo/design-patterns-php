<?php

namespace DesignPatterns\Creational\FactoryMethod1;

interface LoggerFactory
{
    public function createLogger(): Logger;
}
