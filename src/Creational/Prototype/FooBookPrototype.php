<?php

namespace DesignPatterns\Creational\Prototype;

class FooBookPrototype extends BookPrototype
{
    public function __clone()
    {
        $this->category = 'Foo';
    }
}
