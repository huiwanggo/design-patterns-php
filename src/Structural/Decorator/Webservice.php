<?php

namespace DesignPatterns\Structural\Decorator;

class Webservice implements RendererInterface
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function renderData(): array
    {
        return $this->data;
    }
}
