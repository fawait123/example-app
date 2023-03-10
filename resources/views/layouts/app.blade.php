@php
    $url = Request::path();
    $url = explode('/', $url);
    // dd($url);
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{ asset('assets/css') }}/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css') }}/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css') }}/theme.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @livewireStyles
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>
        <header id="page-topbar">
            <div class="navbar-header">

                <div class="d-flex align-items-left">
                    <button type="button" class="btn btn-sm d-lg-none font-size-16 header-item waves-effect mr-2 px-3"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    @if (count($url) == 2)
                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item waves-effect" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-plus"></i> Create New
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu">

                                <!-- item-->
                                <a href="{{ route(end($url) . '.create') }}" class="dropdown-item notify-item">
                                    {{ ucfirst(end($url)) }}
                                </a>
                            </div>
                        </div>
                    @elseif(count($url) === 3)
                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item waves-effect" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-reply"></i> Back
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu">

                                <!-- item-->
                                <a href="{{ route($url[1] . '.index') }}" class="dropdown-item notify-item">
                                    {{ ucfirst($url[1]) }}
                                </a>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="d-flex align-items-center">
                    @if (count($url) == 2)
                        <div class="dropdown d-none d-sm-inline-block ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3" action="{{ route(end($url) . '.index') }}">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control"
                                                value="{{ request('search') }}" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i
                                                        class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif

                    <div class="dropdown d-inline-block">
                        <div class="dropdown-menu dropdown-menu-right">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12">
                                <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/germany.jpg" alt="user-image" class="mr-1"
                                    height="12">
                                <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-1"
                                    height="12">
                                <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-1"
                                    height="12">
                                <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user"
                                src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="Header Avatar">
                            <span class="d-none d-sm-inline-block ml-1">Donald M.</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                <span>Profile</span>
                                <span>
                                    <span class="badge badge-pill badge-warning">1</span>
                                </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                <span>Lock Account</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                <span>Log Out</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <div class="navbar-brand-box">
                    <a href="{{ route('home') }}" class="logo">
                        <i class="mdi mdi-album"></i>
                        <span>
                            Xeloro 1
                        </span>
                    </a>
                </div>

                @include('layouts.navigation')
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="font-size-18 mb-0">{{ ucfirst(end($url)) }}</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        @for ($i = 0; $i < count($url); $i++)
                                            @if ($i == 0)
                                                <li class="breadcrumb-item">
                                                    <a href="#">{{ $url[$i] }}</a>
                                                </li>
                                            @else
                                                <li class="breadcrumb-item active">{{ $url[$i] }}</li>
                                            @endif
                                        @endfor
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    @yield('content')
                    {{-- <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"
                        data-toggle="toast">
                        <div class="toast-header">
                            <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="brand-logo"
                                height="28" class="mr-1 rounded" />
                            <strong class="mr-auto">Myra</strong>
                            <small>11 mins ago</small>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            Hello, world! This is a toast message.
                        </div>
                    </div> --}}
                    <!--end toast-->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2020 ?? Xeloro.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Design & Develop by Myra
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="{{ asset('assets/js') }}/jquery.min.js"></script>
    <script src="{{ asset('assets/js') }}/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js') }}/metismenu.min.js"></script>
    <script src="{{ asset('assets/js') }}/waves.js"></script>
    <script src="{{ asset('assets/js') }}/simplebar.min.js"></script>


    <!-- Sparkline Js-->
    <script src="{{ asset('assets/plugins') }}/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Js-->
    <script src="{{ asset('assets/plugins') }}/jquery-knob/jquery.knob.min.js"></script>

    <!-- Chart Custom Js-->
    <script src="assets/pages/knob-chart-demo.js"></script>


    <!-- Morris Js-->
    <script src="{{ asset('assets/plugins') }}/morris-js/morris.min.js"></script>

    <!-- Raphael Js-->
    <script src="{{ asset('assets/plugins') }}/raphael/raphael.min.js"></script>

    <!-- Custom Js -->
    <script src="assets/pages/dashboard-demo.js"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js') }}/theme.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @livewireScripts
    @if ($message = Session::get('message'))
        <script>
            toastr.options.progressBar = true;
            toastr.info('{{ $message }}')
        </script>
    @endif
</body>

</html>
