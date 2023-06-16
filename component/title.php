<?php
switch ($request) {
    case '':
    case '/':
        $title = "Beranda";
        break;

    case '/tikor':
        $title = "Ambil Titik Koordinat";
        break;

    case '/panitia':
        $title = "Aplikasi Verifikasi";
        break;

    case '/cari':
        $title = "Hasil Seleksi";
        break;

    case '/download':
        $title = "Download";
        break;

    case '/persyaratan':
        $title = "Persyaratan";
        break;

    default:
        http_response_code(404);
        $title = "Halaman tidak ditemukan";
}
?>