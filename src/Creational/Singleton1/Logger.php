<?php

namespace DesignPatterns\Creational\Singleton1;

class Logger
{
    use Singleton;

    private $file;

    /**
     * 设置为 private 限制不允许 new
     */
    private function __construct()
    {
        $this->file = fopen('php://stdout', 'w');
    }

    public function write($message): void
    {
        $date = date('Y-m-d');
        fwrite($this->file, "$date: $message\n");
    }

    public static function log($message): void
    {
        $logger = static::getInstance();
        $logger->write($message);
    }
}
