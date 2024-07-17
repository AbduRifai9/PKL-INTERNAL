<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('biodata.index') ? 'active' : '' }}"
                            href="{{ route('biodata.index') }}" aria-expanded="false" data-target="#submenu-2"
                            aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Biodata</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
