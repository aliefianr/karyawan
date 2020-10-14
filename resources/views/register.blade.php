



<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Penggajian Karyawan</title>


    <link rel="stylesheet" href="{{ url('/assets/') }}/js/plugins/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" id="css-main" href="{{ url('/assets/') }}/css/codebase.min.css">

</head>

<body>

    <div id="page-container" class="main-content-boxed">
        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="bg-body-dark bg-pattern" style="background-image: url('assets/img/various/bg-pattern-inverse.png');">
                <div class="row mx-0 justify-content-center">
                    <div class="hero-static col-lg-6 col-xl-4">
                        <div class="content content-full overflow-hidden">
                            <!-- Header -->
                            <div class="py-30 text-center">
                                <a class="link-effect font-w700" href="index.html">
                                    <i class="si si-chemistry"></i>
                                    <span class="font-size-xl text-primary-dark">kelompok</span><span class="font-size-xl">lima</span>
                                </a>
                                <h1 class="h4 font-w700 mt-30 mb-10">Selamat Datang di Website Penggajian !</h1>
                                <h2 class="h5 font-w400 text-muted mb-0">Isikan untuk membuat akun baru.</h2>
                            </div>
                            <!-- END Header -->

                            <!-- Sign In Form -->
                            <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-signin" action="{{ url('/registerPost') }}" method="post">
                                <div class="block block-themed block-rounded block-shadow">
                                    <div class="block-header bg-gd-dusk">
                                        <h3 class="block-title">Register Page Admin </h3>
                                    </div>
                                    <div class="block-content">
                                    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="admin_username">Username</label>
                                                <input type="text" class="form-control" id="admin_username" name="admin_username">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="confirmation">Password Confirmation</label>
                                                <input type="password" class="form-control" id="confirmation" name="confirmation">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            
                                            <div class="col-sm-12 text-sm-right push">
                                            <button type="reset " class="btn btn-alt-danger">
                                                    <i class="si si-close mr-10"></i> Reset
                                                </button>
                                                <button type="submit" class="btn btn-alt-primary">
                                                    <i class="si si-plus mr-10"></i> Register
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content bg-body-light">
                                        <div class="form-group text-center">
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{url('login')}}">
                                                <i class="fa fa-sign-in mr-5"></i> Login menggunakan akun.
                                            </a>    
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END Sign In Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!-- Codebase Core JS -->
    <script src="{{ url('/assets/') }}js/core/jquery.min.js"></script>
    <script src="{{ url('/assets/') }}/js/core/popper.min.js"></script>
    <script src="{{ url('/assets/') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ url('/assets/') }}/js/core/jquery.slimscroll.min.js"></script>
    <script src="{{ url('/assets/') }}/js/core/jquery.scrollLock.min.js"></script>
    <script src="{{ url('/assets/') }}/js/core/jquery.appear.min.js"></script>
    <script src="{{ url('/assets/') }}/js/core/jquery.countTo.min.js"></script>
    <script src="{{ url('/assets/') }}/js/core/js.cookie.min.js"></script>
    <script src="{{ url('/assets/') }}/js/codebase.js"></script>
    <script src="{{ url('/assets/') }}/js/pages/be_pages_dashboard.js"></script>

    <!-- Page JS Plugins -->
    <!-- <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script> -->

    <!-- Page JS Code -->
    <!-- <script src="assets/js/pages/op_auth_signin.js"></script> -->
</body>

</html>