<!-- <!DOCTYPE html>
<html>
<head>
	<title>Views Data Gaji Karyawan</title>
</head>
<body>
 
	<h3>Data Karyawan</h3>

	<br/>
	<br/>
 
	<table border="1">
		<tr>
            <th>ID</th>
			<th>Nama</th>
			<th>Gender</th>
			<th>Alamat</th>
			<th>Tanggal Lahir</th>
            <th>Jabatan</th>
            <th>Gaji</th>
		</tr>
		@foreach($info as $p)
		<tr>
			<td>{{ $p->karyawan_id }}</td>
			<td>{{ $p->karyawan_nama }}</td>
			<td>{{ $p->karyawan_gender }}</td>
            <td>{{ $p->karyawan_alamat }}</td>
            <td>{{ $p->karyawan_tgl }}</td>
            <td>{{ $p->jabatan_nama }}</td>
            <td>{{ $p->jabatan_gaji }}</td>
            <a href="{{ url('/path/uri') }}">Link Text</a>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html> -->
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
        <header id="page-header">
            <div class="content-header">
                <div class="content-header-section">

                    <div class="content-header-item">
                        <b href="index.html">
                            KELOMPOK 5
                        </b>

                    </div>

                </div>
                <div class="content-header-section d-none d-lg-block">

                </div>
                <div class="content-header-section">

                </div>
            </div>

        </header>
        <main id="main-container">
            <div class="content content-full">



                <div class="block">
                    <div class="block-header block-header-default bg-gray-light">
                        <h3 class="block-title">Data Penggajian <small class="text-primary font-w600">Karyawan</small></h3>

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