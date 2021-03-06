<?php

namespace DesignPatterns\Behavioral\Mediator\Subsystem;

use DesignPatterns\Behavioral\Mediator\Colleague;

class Server extends Colleague
{
    public function process()
    {
        $data = $this->getMediator()->queryDb();

        $this->getMediator()->sendResponse("Hello $data");
    }
}
