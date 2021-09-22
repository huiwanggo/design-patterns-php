<?php

use DesignPatterns\Behavioral\Adapter\EmailNotification;
use DesignPatterns\Behavioral\Adapter\Notification;
use DesignPatterns\Behavioral\Adapter\SlackApi;
use DesignPatterns\Behavioral\Adapter\SlackNotification;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testNotification()
    {
        $sender1 = new EmailNotification('test@test.com');
        $sender2 = new SlackNotification(new SlackApi('login', 'key'), 'test');

        $sender1->send('test', 'test');
        $sender2->send('test', 'test');

        $this->assertInstanceOf(Notification::class, $sender1);
        $this->assertInstanceOf(Notification::class, $sender2);
    }
}
