<?php

namespace DesignPatterns\Creational\Prototype;

class BarBookPrototype extends BookPrototype
{
    public function __clone()
    {
        $this->category = 'Bar';
    }
}
