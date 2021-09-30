<?php

namespace DesignPatterns\Behavioral\State;

class StateDone implements State
{
    public function proceedToNext(OrderContext $context)
    {
        // TODO: Implement proceedToNext() method.
    }

    public function toString(): string
    {
        return 'done';
    }
}
