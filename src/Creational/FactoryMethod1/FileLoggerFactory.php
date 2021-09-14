<?php

namespace DesignPatterns\Creational\FactoryMethod1;

class FileLoggerFactory implements LoggerFactory
{
    protected string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}