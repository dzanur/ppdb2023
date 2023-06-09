<?php
switch ($request) {
    case '':
    case '/':
        $title = "Beranda";
        break;

    case '/views/users':
        $title = "User";
        break;

    case '/seleksi':
        $title = "seleksi";
        break;

    default:
        http_response_code(404);
        $title = "Halaman tidak ditemukan";
}
?>