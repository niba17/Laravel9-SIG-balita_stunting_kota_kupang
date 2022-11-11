<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="/home" class="brand-link">
        {{-- <img src="{{ asset('/template') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <i class="fa-solid fa-user-shield brand-image img-circle elevation-3 py-1" style="font-size: 30px"></i>
        <span class="brand-text font-weight-light ml-4"><b>Administrator</b></span>
    </a>

    <div class="sidebar">

        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('/template') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="{{ asset('/template') }}/#" class="d-block">Alexander Pierce</a>
            </div>
        </div> --}}

        {{-- {{ Route::currentRouteNamed('route_name') ? 'active' : '' }} --}}

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="/home" class="nav-link {{ 'home' == request()->path() ? 'active' : '' }}">
                        <i class="fa-solid fa-house-user" style="font-size: 20px; margin-right:10px;"></i>
                        <p class="text-white">
                            Home
                        </p>
                    </a>
                </li>

                <li class="nav-item @if (request()->path() == 'kasus' ||
                    request()->path() == 'puskesmas' ||
                    request()->path() == 'kecamatan' ||
                    request()->path() == 'kelurahan') {{ 'menu-is-opening menu-open' }} @endif">
                    <a href="{{ asset('/template') }}/#"
                        class="nav-link @if (request()->path() == 'kasus' ||
                            request()->path() == 'puskesmas' ||
                            request()->path() == 'kecamatan' ||
                            request()->path() == 'kelurahan') {{ 'active' }} @endif">
                        <i class="fa-solid fa-database" style="font-size: 22px; margin-right:12px;"></i>
                        <p class="text-white">
                            Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/kasus/{{ $tahun = 2021 }}"
                                class="nav-link {{ 'kasus' == request()->path() ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="{{ 'kasus' == request()->path() ? 'color:black;' : 'color:white;' }}">Kasus
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/kecamatan"
                                class="nav-link {{ 'kecamatan' == request()->path() ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="{{ 'kecamatan' == request()->path() ? 'color:black;' : 'color:white;' }}">
                                    Kecamatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/puskesmas"
                                class="nav-link {{ 'puskesmas' == request()->path() ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="{{ 'puskesmas' == request()->path() ? 'color:black;' : 'color:white;' }}">
                                    Puskesmas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/kelurahan"
                                class="nav-link {{ 'kelurahan' == request()->path() ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="{{ 'kelurahan' == request()->path() ? 'color:black;' : 'color:white;' }}">
                                    Kelurahan</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
