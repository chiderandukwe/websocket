<?php

namespace App\websockets\SocketHandler;

use Ratchet\ConnectionInterface;
use Ratchet\RFC6455\Messaging\MessageInterface;
use Ratchet\WebSocket\MessageComponentInterface;
use App\Models\User;

class UpdateDataSocketHandler extends BaseSocketHandler implements MessageComponentInterface
{

    public function onMessage(ConnectionInterface $connection, MessageInterface $msg)
    {
        User::create(
            [
                'name' => $msg,
                'email' => "my email",
                'password' => "my datet",
            ]
        );
    }
}