<?php

$request = $_SERVER['REQUEST_URI'];
$views = __DIR__ . '/../views/';

switch($request) {
case '/':
    require $views . 'home.php';
    break;
default:
    http_response_code(404);
    require $views . '404.php';
    exit;
}
