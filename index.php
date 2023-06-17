<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

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

    case '/panitia':
        require __DIR__ . $viewDir . 'admin.php';
        break;

    case '/cari':
        require __DIR__ . $viewDir . 'frame.php';
        break;

    case '/download':
        require __DIR__ . $viewDir . 'download.php';
        break;

    case '/persyaratan':
        require __DIR__ . $viewDir . 'persyaratan.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}
require_once 'footer.php';
?>