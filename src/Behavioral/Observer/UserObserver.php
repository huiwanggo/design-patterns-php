<?php

namespace DesignPatterns\Behavioral\Observer;

use SplSubject;

class UserObserver implements \SplObserver
{
    private array $changedUsers;

    /**
     * {@inheritdoc}
     */
    public function update(SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}
