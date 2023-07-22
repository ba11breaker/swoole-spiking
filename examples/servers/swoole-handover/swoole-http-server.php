<?php

use Swoole\Http\Response;
use Swoole\Http\Request;
use Swoole\Http\Server;

$server = new Server("127.0.0.1", 9503);

$server->on("start", function(Server $server) {
    echo "Swoole http server is started at http://127.0.0.1:9503 \n";
});

$server->on("request", function(Request $request, Response $response) {
    $response->header("Content-Type", "text/plain");
    $response->end("Hello World\n");
});

$server->start();