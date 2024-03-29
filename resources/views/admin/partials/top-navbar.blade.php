<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" data-id="avatar" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{-- <span class="mr-2 d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                @if (Auth::user()->photo_profile == null) --}}
                <img class="img-profile rounded-circle" src="{{ asset('/img/profile.png') }}">
                {{-- @else --}}
                {{-- <img class="img-profile rounded-circle" src="{{ asset('storage/' . Auth::user()->photo_profile) }}"> --}}
                {{-- @endif --}}
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                {{-- <a class="dropdown-item" href="/u/change_password">
                    <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                    Ubah Password
                </a> --}}
                {{-- <div class="dropdown-divider"></div> --}}
                <a class="dropdown-item" data-id="btnLogout" href="#" data-toggle="modal"
                    data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
