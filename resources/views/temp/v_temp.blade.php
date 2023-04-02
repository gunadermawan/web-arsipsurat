<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('template') }}/assets/img/pegadaian.png">
    <title>
        @yield('title')
    </title>
    <!--     Fonts and icons  {{ asset('template') }}   -->
    <link href="{{ asset('template') }}https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
        rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('template') }}/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('template') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="{{ asset('template') }}https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('template') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('template') }}/assets/css/soft-ui-dashboard.css?v=1.0.1" rel="stylesheet" />

</head>

<body class="g-sidenav-show  bg-gray-100">
    <!--side navbar-->
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-left ms-3"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0">
                <img src="{{ asset('template') }}/assets/img/pegadaian.png" class="navbar-brand-img h-100 w-15"
                    alt="...">
                <span class="ms-1 font-weight-bold">Manajemen Arsip Surat</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">

        @include('temp.v_nav')

    </aside>
    <!-- end side navbar-->

    <main class="main-content mt-1 border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">

            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/home">Home</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">@yield('title')</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">@yield('title')</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <ul class="navbar-nav  justify-content-end">
                            <li class="nav-item d-flex align-items-center">
                                <a href="#" class="nav-link text-body font-weight-bold px-0">
                                    <span class="d-sm-inline d-none">{{ auth()->user()->username }}</span>
                                </a>
                            </li>
                            <li class="nav-item d-flex align-items-center">
                                <a href="/" class="nav-link text-body font-weight-bold px-0">
                                    <i class="fa fa-user me-sm-1"></i>
                                    <button class="btn btn-danger">Sign Out</button>
                                </a>
                            </li>
                            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item px-3 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-body p-0">
                                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown pe-2 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bell cursor-pointer"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4"
                                    aria-labelledby="dropdownMenuButton">
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            </div>

        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <!-- Main content -->
                <section class="isicontent">
                    @yield('isicontent')
                </section>
                <!-- /.content -->
            </div>
            <footer class="footer pt-3">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-left">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                created <i class="fa fa-heart"></i> by
                                <a class="font-weight-bold" target="_blank">Dishanuary's team</a>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>
    </main>

    <!--   Core JS Files   -->
    <script src="{{ asset('template') }}/assets/js/core/popper.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('template') }}/assets/js/soft-ui-dashboard.min.js?v=1.0.1"></script>
    <script src="{{ asset('template') }}/assets/js/plugins/chartjs.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/plugins/Chart.extension.js"></script>
    <script></script>
    <!-- Github buttons -->
    <script async defer src="{{ asset('template') }}https://buttons.github.io/buttons.js"></script>
</body>

</html>
