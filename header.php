<?php
$jalur1 = isset($jalur);
echo $jalur1;
$vjalur = $jalur1;
?>
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-primary-700 navbar_top">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 fw-bold fs-3 text-dark bg-light px-3 my-1 rounded" href="/">
                <img src="assets/img/logo.png" alt="SMAN 9 Tangerang" width="30px">
                PPDB
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link <?php if($request == "/") echo "active"; ?>" aria-current="page" href="/"><i class="fa-solid fa-house-chimney"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($request == "/persyaratan") echo "active"; ?>" href="persyaratan"><i class="fa-solid fa-check-to-slot"></i> Persyaratan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($request == "/tikor") echo "active"; ?>" href="tikor"><i class="fa-solid fa-location-dot"></i> Tikor</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-users"></i> Daftar</a>
                    <ul class="dropdown-menu bg-primary-700 shadow-lg px-3">
                        <li><a class="dropdown-item nav-link" href=""><i class="fa-solid fa-address-card"></i> Afirmasi</a></li>
                        <li><a class="dropdown-item nav-link" href=""><i class="fa-solid fa-street-view"></i> Zonasi</a></li>
                        <li><a class="dropdown-item nav-link" href=""><i class="fa-solid fa-right-left"></i> Perpindahan Tugas Orang Tua</a></li>
                        <li><hr></li>
                        <li><a class="dropdown-item nav-link disabled" href=""><i class="fa-solid fa-graduation-cap"></i> <strong>Prestasi</strong></a></li>
                        <li><a class="dropdown-item nav-link" href="">- Akademik</a></li>
                        <li><a class="dropdown-item nav-link" href="">- Non Akademik</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($request == "/download") echo "active"; ?>" href="download"><i class="fa-solid fa-download"></i> Download</a>
                </li>
            </ul>
            <form class="d-flex needs-validation" role="search" action="/cari" method="POST" novalidate>
            <div class="input-group has-validation">
                <select class="form-select w-2" name="jalur" required>
                    <option class="dropdown-item" value=""></i> Pilih Jalur</option>
                    <option class="dropdown-item" value="0304">Afirmasi</option>
                    <option class="dropdown-item" value="0300">Zonasi</option>
                    <option class="dropdown-item" value="0303">Mutasi</option>
                    <option class="dropdown-item" disabled><i class="fa-solid fa-graduation-cap"></i> <strong>Prestasi</strong></option>
                    <option class="dropdown-item" value="0302">- Akademik</option>
                    <option class="dropdown-item" value="0305">- Non Akademik</option>
                </select>
                <input type="search" class="form-control has-validation" name="id" pattern="{[0-9][10]}" placeholder="Masukkan NISN" aria-label="Cari" autocomplete="off" required>
                <div class="invalid-feedback">
                    hanya boleh angka...!
                </div>
                <button class="btn btn-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
                <!-- <input class="form-control me-2" type="search" name="id" placeholder="Masukkan NISN" aria-label="Search"> -->
            </form>
            </div>
        </div>
    </nav>