<?php

namespace App\websockets\SocketHandler;

use Ratchet\ConnectionInterface;
use Ratchet\RFC6455\Messaging\MessageInterface;
use Ratchet\WebSocket\MessageComponentInterface;

abstract class BaseSocketHandler implements MessageComponentInterface
{

    public function onOpen(ConnectionInterface $connection)
    {
        dump('hslsls');
    }

    public function onClose(ConnectionInterface $connection)
    {
        dump('good');
    }

    public function onError(ConnectionInterface $connection, \Exception $e)
    {
        dump('good');
    }
}