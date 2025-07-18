<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
    <ul class="nav flex-column">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="dashboard.php">
            <span data-feather="home"></span>
            Dashboard
        </a> 
        </li>
        <li class="nav-item">
        <a class="nav-link" href="dashboard.php?dashboard=identitas">
            <span data-feather="home"></span>
            Identitas
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="dashboard.php?dashboard=data_kegiatan">
            <span data-feather="layers"></span>
            Kegiatan
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="dashboard.php?dashboard=data_dosen">
            <span data-feather="users"></span>
            Data Dosen
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="dashboard.php?dashboard=data_mahasiswa">
            <span data-feather="users"></span>
            Data Mahasiswa
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="dashboard.php?dashboard=data_user">
            <span data-feather="users"></span>
            Data User
        </a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link" href="dashboard.php?dashboard=laporan">
            <span data-feather="bar-chart-2"></span>
            Laporan
        </a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <span data-feather="bar-chart-2"></span>
            Laporan
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="laporan_kegiatan.php" target="_blank">Kegiatan</a></li>
            <li><a class="dropdown-item" href="laporan_mahasiswa.php" target="_blank">Mahasiswa</a></li>
            <li><a class="dropdown-item" href="laporan_lainnya.php" target="_blank">Lainnya</a></li>
          </ul>
        </li>
    </ul>
    </div>
</nav>