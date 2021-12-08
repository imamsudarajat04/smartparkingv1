<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-13">
            <i class="fas fa-car"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SmartParking</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @yield('admin')">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Vehicle -->
    <li class="nav-item @yield('vehicles')">
        <a class="nav-link" href="{{ route('vehicles.index') }}">
            <i class="fas fa-car"></i>
            <span>Kendaraan</span></a>
    </li>

    <!-- Nav Item - Categories Vehicle -->
    <li class="nav-item @yield('categories')">
        <a class="nav-link" href="{{ route('categories-vehicle.index') }}">
            <i class="fas fa-list-alt"></i>
            <span>Kategori Kendaraan</span></a>
    </li>

    <!-- Nav Item - Place -->
    <li class="nav-item @yield('places')">
        <a class="nav-link" href="{{ route('places.index') }}">
            <i class="fas fa-map-marked-alt"></i>
            <span>Wilayah</span></a>
    </li>

    <!-- Nav Item - Parking -->
    <li class="nav-item @yield('parking')">
        <a class="nav-link" href="{{ route('parkings.index') }}">
            <i class="fas fa-parking"></i>
            <span>Tempat Parkir</span></a>
    </li>

    <!-- Nav Item - Booking -->
    <li class="nav-item @yield('booking')">
        <a class="nav-link" href="{{ route('bookings.index') }}">
            <i class="fas fa-bold"></i>
            <span>Booking</span></a>
    </li>

    <!-- Nav Item - Payment -->
    <li class="nav-item @yield('payments')">
        <a class="nav-link" href="{{ route('payments.index') }}">
            <i class="far fa-credit-card"></i>
            <span>Pembayaran</span></a>
    </li>

    <!-- Nav Item - Users -->
    <li class="nav-item @yield('users')">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-users"></i>
            <span>Users</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>