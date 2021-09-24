<?php

namespace DesignPatterns\Structural\Decorator;

class RenderInJsonDecorator extends Decorator
{
    public function renderData()
    {
        $output = $this->wrappable->renderData();

        return json_encode($output);
    }
}
