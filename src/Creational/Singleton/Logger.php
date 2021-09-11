<?php

namespace DesignPatterns\Creational\Singleton;

class Logger extends Singleton
{
    private $file;

    protected function __construct()
    {
        parent::__construct();

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
