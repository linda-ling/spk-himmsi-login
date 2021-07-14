<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','SPK HIMMSI | Dashboard')</title>

    <!--GOOGLE TODO FIXME FONT: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!--THEME STYLE-->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>

    @stack('custom-css')
</head>

<body class="hold-transition sidebar-mini">
    <!--SITE WRAPPER-->
    <div class="wrapper">

        <!-- NAVBAR -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links ---------------------------------------------------------------------------------------------------------------->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">
                        <h4>Dashboard</h4>
                    </a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!--Full Screen-->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <!--ModeFull Screen-->
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.NAVBAR -->

        <!--SIDEBAR SISI KIRI-->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('') }}assets/dist/img/Logo_HIMMSI.png" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Welcome, Linda Lestari !</a>
                    </div>
                </div>

                <!-- Sidebar Menu ---------------------------------------------------------------------------------------------------------------->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="{{ route('dashboard') }}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Data Master
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">4</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('kriteria') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kriteria dan Bobot</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('parameter') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Parameter</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('alternatif') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Alternatif</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('penilaian') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Penilaian</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('perhitungan') }}" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Perhitungan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('laporan') }}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Laporan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/logout') }}" class="nav-link">
                                <i class=" nav-icon fa fa-power-off"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!--/SIDEBAR SISI KIRI-->


        <!--ISI KONTEN----------------------------------------------------------------------------------------------------------------------------->
        @yield('content')
        <!--/ISI KONTEN-->


        <!--FOOTER-->
        <footer class="main-footer">
            <strong>Copyright &copy; 2021 <a href="3">Himmsi</a>.</strong>
            All rights reserved.
        </footer>
        <!--/FOOTER-->


        <!--CONTROL SIDEBAR-->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!--/CONTROL SIDEBAR-->

    </div>
    <!--/SITE WRAPPER-->

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>

    <!--ALERT-->
    @include('sweetalert::alert')

</body>
</html>