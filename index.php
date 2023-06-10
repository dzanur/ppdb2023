<?php

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/views/';
require_once 'head.php';
require_once 'header.php';
// echo $request;

switch ($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'home.php';
        break;

    case '/tikor':
        require __DIR__ . $viewDir . 'tikor.php';
        break;

    case '/seleksi':
        require __DIR__ . $viewDir . 'seleksi.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}
require_once 'footer.php';
?>