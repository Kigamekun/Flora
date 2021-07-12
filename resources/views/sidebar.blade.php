<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard')}}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Syndo Flora</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('/barang')}}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Barang</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/kategori')}}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Kategori</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/pasok')}}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pasok</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/penjualan')}}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Penjualan</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            @yield('content')
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright @anonyarras &copy; Flora Plant 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->

</div>
