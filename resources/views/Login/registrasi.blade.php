<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template') }}/assets/img/.png">
    <link rel="icon" type="image/png" href="{{ asset('template') }}/assets/img/stmik.png">
    <title>
        Registrasi
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

<body class="g-sidenav-show  bg-success-100">
    <!-- Navbar -->

    <!-- End Navbar -->
    <section class="h-100-vh mb-8">
        <div class="page-header align-items-start section-height-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('{{ asset('template') }}/assets/img/pegadaian.png');">
            <span class="mask bg-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-3">Selamat Datang!</h1>
                        <p class="text-lead text-white">Masukan data untuk melakukan registrasi dibawah ini</p>
                    </div>
                    @if (session('pesan'))
                        <div class="alert alert-success alert-dimissible">
                            <a href="/registrasi" class="badge bg-success">X</a>
                            <h5>Success</h5>
                            {{ session('pesan') }}.
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Form Registasi</h5>
                        </div>
                        <div class="row px-xl-5 px-sm-4 px-3">
                            <div class="col-3 ms-auto px-1">

                            </div>
                        </div>
                        <form action="/registrasi/tambah" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <form role="form text-left">
                                    <div class="mb-3">
                                        <input type="text" name="username" class="form-control"
                                            placeholder="Username" aria-label="Name" aria-describedby="email-addon">
                                        <div class="text-danger">
                                            @error('username')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                            aria-label="Email" aria-describedby="email-addon">
                                        <div class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password" aria-label="Password"
                                            aria-describedby="password-addon">
                                        <div class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-2">Sign
                                            up</button>
                                    </div>
                                    <p class="text-sm mt-3 mb-0">Sudah Mempunyai Akun? <a href="/login"
                                            class="text-dark font-weight-bolder">Sign in</a></p>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Soft by Creative Tim.
                    </p>
                </div>
            </div>
        </div>
    </footer>
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
