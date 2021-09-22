<?php

namespace DesignPatterns\Behavioral\Adapter;

class EmailNotification implements Notification
{
    private string $mail;

    public function __construct(string $mail)
    {
        $this->mail = $mail;
    }

    public function send(string $title, string $message)
    {
        echo "EmailNotification send {$this->mail} {$title} {$message}";
    }
}
