<?php

namespace DesignPatterns\Structural\Bridge;

abstract class Service
{
    public Formatter $implementation;

    public function __construct(Formatter $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get(): string;
}
