<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="<?= base_url() ?>">Perpustakaan Cianjur</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0 position-relative" style="width: 300px;">
        <form id="searchForm">
            <div class="input-group">
                <input id="searchInput" class="form-control" type="text" placeholder="Cari atau tekan Ctrl + K" aria-label="Search for..." autocomplete="off" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
        <div id="suggestionBox" class="list-group position-absolute w-100 shadow-sm d-none" style="z-index: 1050; top: 100%;">
            </div>
    </div>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#!">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>

