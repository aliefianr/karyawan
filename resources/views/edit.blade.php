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
        <!-- Main Container -->
        <main id="main-container">
            
            <div class="content content-full">
                <div class="row gutters-tiny justify-content-center invisible" data-toggle="appear">
                    <!-- Row #2 -->

                    <div class="col-4">
                        <div class="block block-themed block-mode-loading-refresh">

                            <div class="block-header bg-gray-light">
                                <h3 class="block-title text-black font-w600">Edit Data Karyawan</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option text-black" data-toggle="block-option" data-action="content_toggle"></button>
                                    <button type="button" class="btn-block-option text-black" onclick="location.href='{{ url('/karyawan/') }}'">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="row block-content justify-content-center block-content-full">
                            @foreach($karyawan as $p)
                            <form class="js-validation-signin px-30" nama="myForm" action="/karyawan/update" enctype="multipart/form-data" method="post" >
                                {{csrf_field()}}    
                                <input type="hidden" name="id" value="{{ $p->karyawan_id }}"> 
                                <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="k_nama" name="k_nama" value="{{ $p->karyawan_nama }}">
                                                <label for="k_nama">Nama</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-12">
                                        <div class="form-material">
                                                <select class="form-control" id="k_gender" name="k_gender">
                                                    <option value="">Pilih..</option>
                                                    <option value="Pria" @if($p->karyawan_gender == "Pria") selected @endif >Pria</option>
                                                    <option value="Wanita"  @if($p->karyawan_gender == "Wanita") selected @endif>Wanita</option>
                                                </select>
                                                <label for="k_gender">Gender</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                        <div class="form-material">
                                                    <input type="text" class="datepicker form-control"  value="{{ $p->karyawan_tgl }}" id="k_tanggal" name="k_tanggal" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy/mm/dd">
                                                    <label for="k_tanggal">Tanggal Lahir</label>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                                <div class="form-material">
                                                    <textarea class="form-control" id="k_alamat" name="k_alamat" rows="2"> {{ $p->karyawan_alamat }}</textarea>
                                                    <label for="k_alamat">Alamat</label>
                                                </div>
                                        </div>
                                       
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                        <div class="form-material">
                                                <select class="form-control" id="k_jabatan" name="k_jabatan">
                                                    <option value="">Pilih..</option>
                                                    <option value="1201"  @if($p->jabatan_id == "1201") selected @endif >Head Manager - Rp.20.000.000,-</option>
                                                    <option value="1202 " @if($p->jabatan_id == "1202") selected @endif >Designer - Rp.10.000.000,-</option>
                                                    <option value="1203" @if($p->jabatan_id == "1203") selected @endif >Android Developer - Rp.10.000.000,-</option>
                                                    <option value="1204" @if($p->jabatan_id == "1204") selected @endif >Consultant - Rp.15.000.000,-</option>
                                                </select>
                                                <label for="k_jabatan">Jabatan</label>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material">
                                                <button type="submit" name="submit" class="btn btn-primary min-width-125">Simpan</button>
                                                <button type="reset" name="reset" class="btn btn-alt-secondary min-width-125">Kosongkan</button>
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
    <script src="{{ url('/assets/') }}/js/pages/op_a_add.js"></script>
    <script>
        $('.datepicker').datepicker();
    </script>
</body>

</html>