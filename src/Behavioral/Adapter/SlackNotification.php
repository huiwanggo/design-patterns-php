<?php

namespace DesignPatterns\Behavioral\Adapter;

class SlackNotification implements Notification
{
    private SlackApi $slack;
    private string $chatId;

    public function __construct(SlackApi $slack, string $chatId)
    {
        $this->slack = $slack;
        $this->chatId = $chatId;
    }

    public function send(string $title, string $message)
    {
        $this->slack->login();
        $this->slack->sendMessage($this->chatId, $title.'#'.$message);
    }
}
