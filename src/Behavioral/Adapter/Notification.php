<?php

namespace DesignPatterns\Behavioral\Adapter;

interface Notification
{
    public function send(string $title, string $message);
}
