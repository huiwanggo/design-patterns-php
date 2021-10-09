<?php

namespace DesignPatterns\Creational\Singleton1;

use Exception;

trait Singleton
{
    private static $instance = null;

    /**
     * 获取实例.
     *
     * @return mixed $instance
     */
    public static function getInstance()
    {
        if (!static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * 不允许 new.
     */
    private function __construct()
    {
    }

    /**
     * 不允许 clone.
     */
    private function __clone()
    {
    }

    /**
     * 不允许反序列化.
     *
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception('Cannot unserialize singleton');
    }
}
