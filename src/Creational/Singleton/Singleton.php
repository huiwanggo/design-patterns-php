<?php

namespace DesignPatterns\Creational\Singleton;

use Exception;

class Singleton
{
    private static array $instances = [];

    public static function getInstance(): Singleton
    {
        $subclass = static::class;
        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static();
        }

        return self::$instances[$subclass];
    }

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }

    /**
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }
}
