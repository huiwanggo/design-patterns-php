<?php

use DesignPatterns\Structural\Adapter\EmailNotification;
use DesignPatterns\Structural\Adapter\Notification;
use DesignPatterns\Structural\Adapter\SlackApi;
use DesignPatterns\Structural\Adapter\SlackNotification;
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
