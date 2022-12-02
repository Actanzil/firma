<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-text mx-3">Admin FIRMA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= BASE_URL; ?>/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Utama
            </div>

            <!-- Nav Item - Data PKL Instansi -->
            <li class="nav-item">
                <a class="nav-link" href="<?= BASE_URL; ?>/instansi">
                    <i class="fas fa-laptop-house"></i>
                    <span>PKL Instansi</span>
                </a>
            </li>

            <!-- Nav Item - Data PKL Lomba -->
            <li class="nav-item">
                <a class="nav-link" href="<?= BASE_URL; ?>/lomba">
                    <i class="fas fa-medal"></i>
                    <span>PKL Lomba</span>
                </a>
            </li>

            <!-- Nav Item - Keluar -->
            <li class="nav-item">
                <a class="nav-link" href="<?= BASE_URL; ?>/logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Keluar</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->