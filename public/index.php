<?php

require __DIR__ . '/../bootstrap/app.php';


$controller = new \Otus\Http\Controllers\IndexController();

$urlParts = parse_url($_SERVER['REQUEST_URI']);

$path = $urlParts['path'];

if ($path === '/') {
    $controller->index();
    return;
} else if ($path === '/status') {
    $controller->status();
    return;
}

http_response_code(404);
echo 'Page Not Found';