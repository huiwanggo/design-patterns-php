<?php

namespace DesignPatterns\Behavioral\Mediator;

use DesignPatterns\Behavioral\Mediator\Subsystem\Client;
use DesignPatterns\Behavioral\Mediator\Subsystem\Database;
use DesignPatterns\Behavioral\Mediator\Subsystem\Server;

class Mediator implements MediatorInterface
{
    private Client $client;
    private Server $server;
    private Database $database;

    public function setColleague(Database $database, Client $client, Server $server)
    {
        $this->database = $database;
        $this->server = $server;
        $this->client = $client;
    }

    public function sendResponse($content)
    {
        $this->client->output($content);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDb(): string
    {
        return $this->database->getData();
    }
}
