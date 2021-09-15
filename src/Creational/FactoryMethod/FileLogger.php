<?php

namespace DesignPatterns\Creational\FactoryMethod;

class FileLogger implements Logger
{
    protected string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * 这里直接输出不做文件写入了
     *
     * @param string $message
     */
    public function log(string $message)
    {
        echo $message;
    }
}
