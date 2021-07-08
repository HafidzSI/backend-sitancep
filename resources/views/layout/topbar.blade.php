<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex">
                <!-- Search form -->
                <form class="navbar-search form-inline" id="navbar-search-main">
                    <div class="input-group input-group-merge search-bar">
                        <span class="input-group-text" id="topbar-addon"><span
                                class="fas fa-search"></span></span>
                        <input type="text" class="form-control" id="topbarInputIconLeft"
                            placeholder="Search" aria-label="Search"
                            aria-describedby="topbar-addon">
                    </div>
                </form>
            </div>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark mr-lg-3 icon-notifications"
                        data-unread-notifications="true" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon icon-sm">
                            <span class="fas fa-bell bell-shake"></span>
                            <span class="icon-badge rounded-circle unread-notifications"></span>
                        </span>
                    </a>
                    <div
                        class="dropdown-menu dashboard-dropdown dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                        <div class="list-group list-group-flush">
                            <a href="#"
                                class="text-center text-primary font-weight-bold border-bottom border-light py-3">Notifications</a>
                            <a href="../../pages/calendar.html"
                                class="list-group-item list-group-item-action border-bottom border-light">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <img alt="Image placeholder"
                                            src="{{ asset('template') }}/assets/img/team/profile-picture-1.jpg"
                                            class="user-avatar lg-avatar rounded-circle">
                                    </div>
                                    <div class="col pl-0 ml--2">
                                        <div
                                            class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                                            </div>
                                            <div class="text-right">
                                                <small class="text-danger">a few moments ago</small>
                                            </div>
                                        </div>
                                        <p class="font-small mt-1 mb-0">Added you to an event
                                            "Project stand-up" tomorrow at 12:30 AM.</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#"
                                class="dropdown-item text-center text-primary font-weight-bold py-3">View
                                all</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <div class="media d-flex align-items-center">
                            <img class="user-avatar md-avatar rounded-circle"
                                alt="Image placeholder"
                                src="{{ asset('template') }}/assets/img/team/profile-picture-3.jpg">
                            <div
                                class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                                <span class="mb-0 font-small font-weight-bold">{{ app('firebase.auth')->getUser(Session::get('uid'))->displayName }}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
                        <a class="dropdown-item font-weight-bold" href="#"><span
                                class="far fa-user-circle"></span>My Profile</a>
                        <a class="dropdown-item font-weight-bold" href="#"><span
                                class="fas fa-cog"></span>Settings</a>
                        {{-- <a class="dropdown-item font-weight-bold" href="#"><span
                                class="fas fa-envelope-open-text"></span>Messages</a> --}}
                        {{-- <a class="dropdown-item font-weight-bold" href="#"><span
                                class="fas fa-user-shield"></span>Support</a> --}}
                        <div role="separator" class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="dropdown-item font-weight-bold" type="submit"><span
                                    class="fas fa-sign-out-alt text-danger"></span>Logout</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>