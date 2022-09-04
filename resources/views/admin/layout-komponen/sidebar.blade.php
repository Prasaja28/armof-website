<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item {{ (request()->is('*')) ? 'active' : '' }}">
                        <a class="nav-link" href="/dashboard-admin"><i class="fas fa-home"></i>Dashboard</a>
                    </li>
                    <li class="nav-item {{ (request()->is('lokasi*')) ? 'active' : '' }}">
                        <a class="nav-link" href="/koleksi-admin"><i class="fas fa-bookmark"></i>Koleksi</a>
                    </li>
                    <li class="nav-item {{ (request()->is('admin-profil*')) ? 'active' : '' }}">
                        <a class="nav-link" href="/admin-profil"><i class="fas fa-warehouse"></i>Profil Perusahaan</a>
                    </li>
                    <li class="nav-item {{ (request()->is('setting-socialmedia*')) ? 'active' : '' }}">
                        <a class="nav-link" href="/setting-socialmedia"><i class="fas fa-link"></i>Setting URL Sosmed</a>
                    </li>
                    <li class="nav-item {{ (request()->is('admin-akun*')) ? 'active' : '' }}">
                        <a class="nav-link" href="/admin-akun"><i class="fas fas fa-user"></i>Akun Admin</a>
                    </li>
                    <li class="nav-divider">
                        Menu Master
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Menu Master </a>
                        <div id="submenu-6" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="/kategori-furniture">kategori furniture</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/kategori-fungsi">kategori fungsi</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->