<?php

namespace DesignPatterns\Structural\Decorator;

abstract class Decorator implements RendererInterface
{
    protected RendererInterface $wrappable;

    public function __construct(RendererInterface $wrappable)
    {
        $this->wrappable = $wrappable;
    }
}
