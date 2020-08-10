<?php

use Otus\Sockets\Exceptions\SocketsException;

require 'init.php';

try {
    $client = new \Otus\Sockets\Client(
        $_ENV['SOCKET_PATH'],
        $_ENV['SOCKET_PORT'],
    );

    $client->waitForMessage();

} catch (SocketsException $e) {
    echo 'Can not connect to server', PHP_EOL;
}
