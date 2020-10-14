<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en" class="no-focus">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Penggajian Karyawan</title>

    <!-- Codebase framework -->
    <link rel="stylesheet" href="{{ url('/assets/') }}/js/plugins/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" id="css-main" href="{{ url('/assets/') }}/css/codebase.min.css">
    <link rel="stylesheet" id="css-main" href="{{ url('/assets/') }}/css/codebase.min.css">
    <link rel="stylesheet" href="{{ url('/assets/') }}/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
    
</head>

<body>
    <!-- Page Container -->
    <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header-modern main-content-boxed">

<!-- Header -->
<header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="content-header-section">
                <!-- Logo -->
                <div class="content-header-item">
                <a class="link-effect font-w700" href="#">
                                            <i class="si si-graph"></i>
                                            <span class="font-size-xl text-primary-dark"><i>Penggajian </span><span class="font-size-xl">Karyawan</i></span>
                                        </a>

                </div>
                <!-- END Logo -->
            </div>
        
            <div class="content-header-section d-none d-lg-block">
            
            </div>
            <!-- END Middle Section -->

            <!-- Right Section -->
            <div class="content-header-section">
                <a class="align-middle link-effect text-primary-dark font-w600" href="#">{{Session::get('nama')}}</a>
                <button type="button" class="btn btn-rounded btn-dual-secondary" onclick="location.href='{{ url('/utama/') }}'">
                    <i class="si si-home"></i>
                </button>
                <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="si si-chart"></i><i class="fa fa-angle-down ml-1"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                    <a class="dropdown-item" href="{{ url('/admin/edit/') }}/{{Session::get('id_a')}}">
                        <i class="si si-user mr-5"></i> Profile
                    </a>
                    <a class="dropdown-item" href="{{ url('/karyawan/tampil') }}">
                        <i class="si si-docs mr-5"></i> Karyawan
                    </a>
                    <a class="dropdown-item" href="{{ url('/jabatan/') }}">
                        <i class="si si-note mr-5"></i> Jabatan
                    </a>
                    </div>
                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                
                <button type="button" class="btn btn-circle btn-dual-secondary" onclick="location.href='{{ url('/login/') }}'">
                    <i class="si si-logout"></i>
                </button>
                <!-- END Open Search Section -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

    </header>
    <!-- END Header -->
        <!-- Main Container -->
        <main id="main-container">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="modal-slideup" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-slideup" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-pulse">
                                        <h3 class="block-title">Are you sure to delete this ?</h3>
                                        <div class="block-options">
                                            <a id="btn-delete" href="#" class="btn btn-alt-success">
                                                <i class="fa fa-check"></i>
                                            </a>
                                            <button type="button" class="btn btn-alt-danger" data-dismiss="modal">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
            <div class="content content-full">
                <div class="row gutters-tiny justify-content-center invisible" data-toggle="appear">
                    <!-- Row #2 -->

                    <div class="col-4">
                        <div class="block block-themed block-mode-loading-refresh">

                            <div class="block-header bg-gray-light">
                                <h3 class="block-title text-black font-w600">Edit Profile</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option text-black" data-toggle="block-option" data-action="content_toggle"></button>
                                    <button type="button" class="btn-block-option text-black" onclick="location.href='{{ url('/karyawan/') }}'">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="row block-content justify-content-center block-content-full">
                            @foreach($admin as $p)
                            <form class="js-validation-signin px-30" nama="myForm" action="/admin/update" enctype="multipart/form-data" method="post" >
                                {{csrf_field()}}    
                                <input type="hidden" name="id" value="{{ $p->admin_id }}"> 
                                <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="a_nama" name="a_nama" value="{{ $p->admin_nama }}">
                                                <label for="a_nama">Nama</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="a_username" name="a_username" value="{{ $p->admin_username }}">
                                                <label for="a_username">Username</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="a_password" name="a_password" >
                                                <label for="a_password">Ubah Password</label>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="col-12">
                                            <div class="form-material">
                                                <button type="submit" name="submit" class="btn btn-primary min-width-125">Simpan</button>
                                                <button type="reset" name="reset" class="btn btn-danger min-width-125" onclick="deleteConfirm('/admin/hapus/{{ $p->admin_id }}')">Hapus Akun</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="opacity-0">
            <div class="content py-20 font-size-xs clearfix">
                <div class="float-right">
                    Together We Strong <i class="fa fa-hand-rock-o text-pulse"></i>
                </div>
                <div class="float-left">
                    <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Codebase 1.3</a> &copy; <span class="js-year-copy">2017</span>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->
    
    <script>
            function deleteConfirm(url) {
                $('#btn-delete').attr('href', url);
                $('#deleteModal').modal();
            }
        </script>
    <script src="{{ url('/assets/') }}/js/core/jquery.min.js"></script>
    <script src="{{ url('/assets/') }}/js/core/popper.min.js"></script>
    <script src="{{ url('/assets/') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ url('/assets/') }}/js/core/jquery.slimscroll.min.js"></script>
    <script src="{{ url('/assets/') }}/js/core/jquery.scrollLock.min.js"></script>
    <script src="{{ url('/assets/') }}/js/core/jquery.appear.min.js"></script>
    <script src="{{ url('/assets/') }}/js/core/jquery.countTo.min.js"></script>
    <script src="{{ url('/assets/') }}/js/core/js.cookie.min.js"></script>
    <script src="{{ url('/assets/') }}/js/codebase.js"></script>
    <script src="{{ url('/assets/') }}/js/pages/be_pages_dashboard.js"></script>
    <script src="{{ url('/assets/') }}/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="{{ url('/assets/') }}/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <script src="{{ url('/assets/') }}/js/pages/be_forms_plugins.js"></script>
    <!-- Page JS Code -->
    <script src="{{ url('/assets/') }}/js/pages/op_a_add_a.js"></script>
    <script>
        $('.datepicker').datepicker();
    </script>
</body>

</html>