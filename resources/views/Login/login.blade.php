<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template') }}/assets/img/stmik.png">
    <link rel="icon" type="image/png" href="{{ asset('template') }}/assets/img/stmik.png">
    <title>
        Login
    </title>
    <!--     Fonts and icons     -->
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

<body class="g-sidenav-show  bg-white">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->

                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <section>

        <div class="page-header section-height-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left bg-transparent">
                                @if (session('pesan'))
                                    <div class="alert alert-warning alert-dimissible">
                                        <a href="/" class="badge bg-gradient-danger">X</a>
                                        <h5>Warning!</h5>
                                        {{ session('pesan') }}.
                                    </div>
                                @endif
                                <h3 class="font-weight-bolder text-success">Form Login</h3>
                                <p class="mb-0">Masukan Username dan Password</p>
                            </div>
                            <form action="/postlogin" method="POST">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <form role="form text-left">
                                        <label>Username</label>
                                        <div class="mb-3">
                                            <input type="text" name="username" class="form-control"
                                                placeholder="Username" required>
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Password" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-success w-100 mt-4 mb-0">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                            </form>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    Belum Mempunyai akun?
                                    <a href="/registrasi" class="text-info font-weight-bold">Sign up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->

    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="{{ asset('template') }}/assets/js/core/popper.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('template') }}/assets/js/soft-ui-dashboard.min.js?v=1.0.1"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="{{ asset('template') }}https://buttons.github.io/buttons.js"></script>
</body>

</html>
