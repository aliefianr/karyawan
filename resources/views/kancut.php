<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>


    <link rel="stylesheet" href="{{ url('/assets/') }}js/plugins/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" id="css-main" href="{{ url('/assets/') }}assets/css/codebase.min.css">

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
                <a href="index.html">
                    
                </a>

            </div>
            <!-- END Logo -->
        </div>
        <!-- END Left Section -->

        <!-- Middle Section -->
        <div class="content-header-section d-none d-lg-block">
            <!-- Header Navigation -->
            <!--
                    Desktop Navigation, mobile navigation can be found in #sidebar

                    If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                    If your sidebar menu includes headings, they won't be visible in your header navigation by default
                    If your sidebar menu includes icons and you would like to hide them, you can add the class 'nav-main-header-no-icons'
                    -->

            <!-- END Header Navigation -->
        </div>
        <!-- END Middle Section -->

        <!-- Right Section -->
        <div class="content-header-section">

            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
            <button type="button" class="btn btn-rounded btn-dual-secondary" onclick="location.href='#'">
                <?php echo ucfirst($this->session->userdata('nama')); ?>
            </button>
            <button type="button" class="btn btn-rounded btn-dual-secondary" onclick="location.href='#'">
                <i class="si si-home"></i>
            </button>
            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="si si-chart"></i><i class="fa fa-angle-down ml-1"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                <a class="dropdown-item" href="#">
                    <i class="si si-user mr-5"></i> Profile
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                    <i class="si si-docs mr-5"></i> Content Management
                </a>
                <a class="dropdown-item" href="be_pages_generic_invoice.html">
                    <i class="si si-note mr-5"></i> Invoices
                </a>
            </div>
            <button type="button" class="btn btn-circle btn-dual-secondary" onclick="location.href='#'">
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
            <div class="content content-full">
               

                
                <!-- Dynamic Table Full Pagination -->
                <div class="block">
                    <div class="block-header block-header-default bg-gray-light">
                        <h3 class="block-title">News Article <small class="text-primary font-w600">Game</small></h3>
                        
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
                                        <td class="">{{ $p->jabatan_gaji }}</td>
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- END Dynamic Table Full Pagination -->
                
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

    <!-- Codebase Core JS -->
    <script src="{{ url('/assets/') }}js/core/jquery.min.js"></script>
    <script src="{{ url('/assets/') }}js/core/popper.min.js"></script>
    <script src="{{ url('/assets/') }}js/core/bootstrap.min.js"></script>
    <script src="{{ url('/assets/') }}js/core/jquery.slimscroll.min.js"></script>
    <script src="{{ url('/assets/') }}js/core/jquery.scrollLock.min.js"></script>
    <script src="{{ url('/assets/') }}js/core/jquery.appear.min.js"></script>
    <script src="{{ url('/assets/') }}js/core/jquery.countTo.min.js"></script>
    <script src="{{ url('/assets/') }}js/core/js.cookie.min.js"></script>
    <script src="{{ url('/assets/') }}js/codebase.js"></script>

    <!-- Page JS Plugins -->
    <script src="{{ url('/assets/') }}js/plugins/chartjs/Chart.bundle.min.js"></script>
    <script src="{{ url('/assets/') }}js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('/assets/') }}js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page JS Code -->
    <script src="{{ url('/assets/') }}js/pages/be_tables_datatables.js"></script>
    <script src="{{ url('/assets/') }}js/pages/be_pages_dashboard.js"></script>

</script>
</body>

</html>