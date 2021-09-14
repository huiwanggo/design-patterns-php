<?php

namespace DesignPatterns\Creational\FactoryMethod1;

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}
