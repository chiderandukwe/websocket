<?php

namespace App\websockets\SocketHandler;

use App\Models\User;
use Ratchet\ConnectionInterface;
use Illuminate\Support\Facades\Log;
use Ratchet\RFC6455\Messaging\MessageInterface;
use Ratchet\WebSocket\MessageComponentInterface;

abstract class BaseSocketHandler implements MessageComponentInterface
{

    public function onOpen(ConnectionInterface $connection)
    {
        Log::info('hslsls');
        User::create(
            [
                'name' => "open",
                'email' => "my email",
                'password' => "my datet",
            ]
        );
    }

    public function onClose(ConnectionInterface $connection)
    {
        User::create(
            [
                'name' => "close",
                'email' => "my email",
                'password' => "my datet",
            ]
        );
    }

    public function onError(ConnectionInterface $connection, \Exception $e)
    {
        dump('good');
    }
}