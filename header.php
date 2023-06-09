    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-700">
        <div class="container-fluid">
            <a class="navbar-brand fs-2 fw-bold" href="#">
                <img src="assets/img/logo.png" alt="SMAN 9 Tangerang" width="50px">
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
                    <a class="nav-link <?php if($request == "/#cara-daftar") echo "active"; ?>" aria-current="page" href="#cara-daftar"><i class="fa-solid fa-edit"></i> Cara Daftar</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-users"></i> Daftar</a>
                    <ul class="dropdown-menu bg-primary-700 shadow-lg">
                        <li><a class="dropdown-item text-light" href=""><i class="fa-solid fa-address-card"></i> Afirmasi</a></li>
                        <li><a class="dropdown-item text-light" href=""><i class="fa-solid fa-street-view"></i> Zonasi</a></li>
                        <li><a class="dropdown-item text-light" href=""><i class="fa-solid fa-right-left"></i> Perpindahan Tugas Orang Tua</a></li>
                        <li><hr class="dropdown-divider text-light"></li>
                        <li><a class="dropdown-item text-light" href=""><i class="fa-solid fa-graduation-cap"></i> <strong>Prestasi</strong></a></li>
                        <li><a class="dropdown-item text-light" href="">- Akademik</a></li>
                        <li><a class="dropdown-item text-light" href="">- Non Akademik</a></li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link <?php if($request == "/seleksi") echo "active"; ?>" href="seleksi"><i class="fa-solid fa-users"></i> Hasil Seleksi</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link <?php if($request == "/download") echo "active"; ?>" href="download"><i class="fa-solid fa-download"></i> Download Juknis</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            </div>
        </div>
    </nav>