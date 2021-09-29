<?php

namespace DesignPatterns\Behavioral\Mediator\Subsystem;

use DesignPatterns\Behavioral\Mediator\Colleague;

class Client extends Colleague
{
    public function request()
    {
        $this->getMediator()->makeRequest();
    }

    public function output($content)
    {
        echo $content;
    }
}
