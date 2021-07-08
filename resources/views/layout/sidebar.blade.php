<nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="user-avatar lg-avatar mr-4">
                    <img src="{{ asset('template') }}/assets/img/team/profile-picture-3.jpg"
                        class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                </div>
                <div class="d-block">
                    <h2 class="h6">Hi, Jane</h2>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit"
                            class="btn btn-secondary text-dark btn-xs"><span class="mr-2"><span
                                    class="fas fa-sign-out-alt"></span></span>Sign Out</button>
                    </form>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse"
                    data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                    aria-label="Toggle navigation"></a>
            </div>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item  active ">
                <a href="../../pages/dashboard/dashboard.html" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                    <span>Dashboard</span>
                </a>
            </li>
            @if(Session::get('role') == 'admin')
            <li class="nav-item">
                <span class="nav-link  d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-app">
                  <span>
                    <span class="sidebar-icon"><span class="fas fa-angle-double-right"></span></span>
                    Laporan Masuk
                  </span>
                  <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                </span>
                <div class="multi-level collapse" role="list" id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item"><a class="nav-link" href="/report"><span>Lapor</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="/report_cepat"><span>Lapor Cepat</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <span class="nav-link  d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-app3">
                  <span>
                    <span class="sidebar-icon"><span class="fas fa-history"></span></span>
                    History
                  </span>
                  <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                </span>
                <div class="multi-level collapse" role="list" id="submenu-app3" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item"><a class="nav-link" href="/history"><span>Lapor</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="/history_report_cepat"><span>Lapor Cepat</span></a></li>
                    </ul>
                </div>
            </li>
            @endif
            @if(Session::get('role') == 'pekerja')
            <li class="nav-item">
                <span class="nav-link  d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-app2">
                  <span>
                    <span class="sidebar-icon"><span class="fas fa-hard-hat"></span></span>
                    Pengerjaan
                  </span>
                  <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                </span>
                <div class="multi-level collapse" role="list" id="submenu-app2" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item"><a class="nav-link" href="/pengerjaan"><span>Lapor</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="/pengerjaan_report_cepat"><span>Lapor Cepat</span></a></li>
                    </ul>
                </div>
            </li>
            @endif
            <li class="nav-item ">
                <a href="../../pages/settings.html" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
                    <span>Akun</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
