<?php

namespace DesignPatterns\Behavioral\Command;

class AddMessageDateCommand implements UndoableCommand
{
    private Receiver $output;

    public function __construct(Receiver $output)
    {
        $this->output = $output;
    }

    public function execute()
    {
        $this->output->enableDate();
    }

    public function undo()
    {
        $this->output->disableDate();
    }
}
