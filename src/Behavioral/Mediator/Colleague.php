<?php

namespace DesignPatterns\Behavioral\Mediator;

abstract class Colleague
{
    private MediatorInterface $mediator;

    public function __construct(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }

    public function getMediator(): MediatorInterface
    {
        return $this->mediator;
    }
}
