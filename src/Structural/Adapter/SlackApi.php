<?php

namespace DesignPatterns\Structural\Adapter;

class SlackApi
{
    private string $login;
    private string $apiKey;

    public function __construct(string $login, string $apiKey)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }

    public function login()
    {
        echo "Slack login success [{$this->login}]";
    }

    public function sendMessage(string $chatId, string $message)
    {
        echo "Slack sendMessage success [{$chatId} - {$message}]";
    }
}
