<?php

namespace DesignPatterns\Behavioral\Observer;

use SplObjectStorage;
use SplObserver;

class User implements \SplSubject
{
    private SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }


    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * @inheritDoc
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function changeEmail(string $email)
    {
        $this->notify();
    }
}
