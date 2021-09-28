<?php

namespace DesignPatterns\Behavioral\Command;

class HelloCommand implements Command
{
    private Receiver $output;

    public function __construct(Receiver $output)
    {
        $this->output = $output;
    }

    public function execute()
    {
        $this->output->write('Hello World');
    }
}
