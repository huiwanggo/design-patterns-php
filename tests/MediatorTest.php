<?php

use DesignPatterns\Behavioral\Mediator\Mediator;
use DesignPatterns\Behavioral\Mediator\Subsystem\Client;
use DesignPatterns\Behavioral\Mediator\Subsystem\Database;
use DesignPatterns\Behavioral\Mediator\Subsystem\Server;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testOutputHelloWorld()
    {
        $media = new Mediator();

        $client = new Client($media);
        $media->setColleague(new Database($media), $client, new Server($media));

        $this->expectOutputString('Hello World');

        $client->request();
    }
}
