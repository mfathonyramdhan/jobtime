<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="<?= base_url('assets/images/') ?>logo/logo.png" alt="Logo" srcset="" /></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Admin Menu</li>

                        <li class="sidebar-item active">
                            <a href="<?= base_url('admin') ?>" class="sidebar-link">
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Manajemen Akun</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="<?= base_url('admin/daftar_admin') ?>">Data Akun Admin</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="<?= base_url('admin/daftar_user') ?>">Data Akun User</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Manajemen Loker</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="<?= base_url('admin/data_loker') ?>">Data Loker</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a href="<?= base_url('admin/logout') ?>" class="sidebar-link">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x">
                    <i data-feather="x"></i>
                </button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>