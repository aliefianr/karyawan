
<!doctype html>

<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Penggajian Karyawan</title>


    <link rel="stylesheet" href="{{ url('/assets/') }}/js/plugins/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" id="css-main" href="{{ url('/assets/') }}/css/codebase.min.css">

</head>

<body>
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
        <main id="main-container">
            <div class="content content-full">
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


                <div class="block">
                    <div class="block-header block-header-default bg-gray-light">
                        <h3 class="block-title">Data Penggajian <small class="text-primary font-w600">Karyawan</small></h3>
                        <button type="button" class="btn-block-option text-black ml-1" onclick="location.href='{{ url('/karyawan/tambah/') }}'">
                            <i class="si si-plus"></i>
                        </button>
                        <button type="button" class="btn-block-option text-black ml-1" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-bordered table-hover table-vcenter js-dataTable-full-pagination">
                            <thead>
                                <tr>
                                    <th class="text-center"><small>ID</small></th>
                                    <th class="text-center"><small>Nama</small></th>
                                    <th class="text-center"><small>Gender</small></th>
                                    <th class="text-center"><small>Alamat</small></th>
                                    <th class="text-center"><small>Tanggal Lahir</small></th>
                                    <th class="text-center"><small>Jabatan</small></th>
                                    <th class="text-center"><small>Gaji</small></th>
                                    <th class="text-center"><small>Options</small></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($info as $p)
                                <tr>
                                    <td class="">{{ $p->karyawan_id }}</td>
                                    <td class="">{{ $p->karyawan_nama }}</td>
                                    <td class="">{{ $p->karyawan_gender }}</td>
                                    <td class="">{{ $p->karyawan_alamat}}</td>
                                    <td class="">{{ $p->karyawan_tgl }}</td>
                                    <td class="">{{ $p->jabatan_nama }}</td>
                                    <td class="">Rp.{{ $p->jabatan_gaji }},-</td>
                                    <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" 
                                            onclick="location.href='/karyawan/edit/{{ $p->karyawan_id }}'">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" 
                                            onclick="deleteConfirm('/karyawan/hapus/{{ $p->karyawan_id }}')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>

        </main>
        <footer id="page-footer" class="opacity-0">
            <div class="content py-20 font-size-xs clearfix">
                <div class="float-right">
                    Together We Strong <i class="fa fa-hand-rock-o text-pulse"></i>
                </div>
                <div class="float-left">
                    <a class="font-w600" href="404" target="_blank">Kelompok 5</a> &copy; <span class="js-year-copy">2020</span>
                </div>
            </div>
        </footer>
    </div>
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
    <script src="{{ url('/assets/') }}/js/plugins/chartjs/Chart.bundle.min.js"></script>
    <script src="{{ url('/assets/') }}/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('/assets/') }}/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('/assets/') }}/js/pages/be_tables_datatables.js"></script>
    <script src="{{ url('/assets/') }}/js/pages/be_pages_dashboard.js"></script>

    </script>
</body>

</html>