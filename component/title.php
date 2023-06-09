<?php
switch ($request) {
    case '':
    case '/':
        $title = "Beranda";
        break;

    case '/views/users':
        $title = "User";
        break;

    case '/contact':
        $title = "Kontak Kami";
        break;

    default:
        http_response_code(404);
        $title = "Beranda";
}
?>