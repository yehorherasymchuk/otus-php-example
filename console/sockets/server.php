<?php

use Otus\Sockets\Exceptions\SocketsException;

require 'init.php';

try {
    $server = new \Otus\Sockets\Server(
        $_ENV['SOCKET_PATH'],
        $_ENV['SOCKET_PORT'],
    );

    $server->listen();

} catch (SocketsException $e) {
    echo 'SocketsException', PHP_EOL;
}