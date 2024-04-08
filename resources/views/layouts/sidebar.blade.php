<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{route("home")}}" class="text-nowrap logo-img">
                <img src="{{ asset('images/logos/dark-logo.svg') }}" width="160" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class='bx bx-x' style="font-size: 25px"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">                    
                   <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route("home")}}" aria-expanded="false">
                        <span>
                            <i class='bx bx-home' ></i>
                        </span>
                        <span class="hide-menu">Inicio</span>
                    </a>
                </li>   
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Jugadores</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('players.list')}}" aria-expanded="false">                        
                        <span>
                            <i class='bx bx-user-check'></i>
                        </span>                       
                        <span class="hide-menu">Administrar jugadores</span>                        
                    </a>
                </li>
                <!--<li class="sidebar-item">
                    <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                        <span>
                            <i class='bx bx-list-ul' ></i>
                        </span>
                        <span class="hide-menu">Listado de recargas</span>
                    </a>
                </li>-->
                <!--
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Alerts</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                            <span>
                                <i class="ti ti-cards"></i>
                            </span>
                            <span class="hide-menu">Card</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                            <span>
                                <i class="ti ti-file-description"></i>
                            </span>
                            <span class="hide-menu">Forms</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                            <span>
                                <i class="ti ti-typography"></i>
                            </span>
                            <span class="hide-menu">Typography</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">AUTH</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                            <span>
                                <i class="ti ti-login"></i>
                            </span>
                            <span class="hide-menu">Login</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                            <span>
                                <i class="ti ti-user-plus"></i>
                            </span>
                            <span class="hide-menu">Register</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">EXTRA</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                            <span>
                                <i class="ti ti-mood-happy"></i>
                            </span>
                            <span class="hide-menu">Icons</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                            <span>
                                <i class="ti ti-aperture"></i>
                            </span>
                            <span class="hide-menu">Sample Page</span>
                        </a>
                    </li>
                -->
            </ul>

        </nav>

    </div>

</aside>
