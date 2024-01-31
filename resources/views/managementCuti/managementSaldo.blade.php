@extends('layout.tempWeb')

@section('kontenpage')

<body id="kt_body" class="page-loading-enabled quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-minimize-hoverable aside-fixed">
    <script>
        document.title = 'Management Saldo | PI-Smart'
    </script>
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
        <!--begin::Logo-->
        <div class="mobile-logo">
            <a href="assets/media/logos/PI-SMART-LOGO.png"></a>
        </div>
        <!--end::Logo-->

        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
            <!--end::Aside Mobile Toggle-->

            <!--begin::Topbar Mobile Toggle-->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <!--end::Topbar Mobile Toggle-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            @include('layout.sidebarAbsence')
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                <!--begin::Content Subheader-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 subheader-solid" id="kt_subheader">
                        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center flex-wrap mr-1">
                                <!--begin::Page Title-->
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Management Saldo</h5>
                                <!--end::Page Title-->
                            </div>
                            <!--end::Info-->
                            <div class="d-flex align-items-center">
                                <div id="selectYear"></div>
                            </div>
                        </div>
                    </div>
                    <!--end::Subheader-->

                    <!--begin::Entry Dashboard Page-->
                    <div class="d-flex flex-column-fluid">
                        <div class="container-fluid">
                            <div class="d-flex flex-column-fluid">
                                <div class="container-fluid p-0">
                                    <div class="card card-custom gutter-b">
                                        {{-- header  --}}
                                        <div class="card-header">
                                            <div class="card-title">
                                                <label>Daftar Management Saldo Karyawan</label>
                                            </div>

                                            <div class="card-toolbar">
                                                <span>
                                                    <button class="btn btn-light-primary py-2 px-4 font-weight-bolder font-size-m" data-toggle="modal" data-target="#uploadExcelFile">
                                                        <i class="flaticon2-plus icon-sm"></i>Upload Excel
                                                    </button>
                                                    <button class="btn btn-primary py-2 px-4 font-weight-bolder font-size-m" data-toggle="modal" data-target="#managementSaldo" onclick="clearForm()">
                                                        <i class="flaticon2-plus icon-sm"></i>Create Saldo
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                        {{-- end- header  --}}
                                        <div class="card-body pt-0">
                                            <!--begin::Search Form-->
                                            <div class="mt-2 mb-5 mt-lg-5 mb-lg-5">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-12 col-xl-12">
                                                        <div class="row align-items-center">
                                                            <div class="row w-100 mx-1">
                                                                <div class="col-md-3 px-0">
                                                                    <div class="form-group m-4">
                                                                        <label>Perusahaan :
                                                                            <span class="text-danger">*</span></label>
                                                                        <select class="form-control" name="perusahaan" id="perusahaan_key" onchange="getValPerusahaan(this);"></select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 px-0">
                                                                    <div class="form-group m-4">
                                                                        <label>Direktorat :
                                                                            <span class="text-danger">*</span></label>
                                                                        <select class="form-control" id="direktorat" onchange="getValDirektorat(this);">

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 px-0">
                                                                    <div class="form-group m-4">
                                                                        <label>Kompartemen :
                                                                            <span class="text-danger">*</span></label>
                                                                        <select class="form-control" id="kompartemen" onchange="getValKompartemen(this);">

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 px-0">
                                                                    <div class="form-group m-4">
                                                                        <label>Departemen :
                                                                            <span class="text-danger">*</span></label>
                                                                        <select class="form-control" id="departemen" onchange="getValDepartemen(this);">

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-md-12 my-2">
                                                                <div class="input-icon">
                                                                    <input type="text" class="form-control" placeholder="Search..." id="key_search" />
                                                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 text-right my-2">
                                                                <a onClick="clearFormReset()" class="btn btn-light-warning px-6 font-weight-bold">
                                                                    Reset
                                                                </a>
                                                                <a onClick="readSaldo()" class="btn btn-light-primary px-6 font-weight-bold">
                                                                    Search
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Search Form-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-head-bg table-hover text-center display nowrap" width="100%" id="kt_datatable">
                                                    <thead>
                                                        <tr class="text-center" role="row">
                                                            <th>#</th>
                                                            <th>Nama Pegawai</th>
                                                            <th>Tipe Absen</th>
                                                            <th>Saldo</th>
                                                            <th>Valid From</th>
                                                            <th>Valid To</th>
                                                            <th>Periode</th>
                                                            <th>Maximum Debt</th>
                                                            <th>Valid From Debt</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody id="dataSaldo">
                                                        <input type="hidden" id="token_oauth" name="token_oauth" value="{{$user['token']['access_token']}}" />
                                                        <input class="form-control" type="hidden" id="nik_user" name="nik_user" value="{{$user['nik']}}" />
                                                        <input class="form-control" type="hidden" id="company" name="company" value="{{$user['comp_code']}}" />
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End- body table  --}}

                            {{-- modal body UPLOAD EXCEL --}}
                            <div class="modal fade" id="uploadExcelFile" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="uploadExcelFileLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="uploadExcelFileLabel">Upload File Excel</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <input type="hidden" id="id_upload_excel">
                                            <form id="excelForm" action="{{ url('/import') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" name="excel_file">

                                                <div class="card-footer text-right">
                                                    <button class="btn btn-outline-danger font-weight-bold">Cancel</button>
                                                    <button class="btn btn-primary font-weight-bold" id="btn-submit" type="submit">Import</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- END- modal body UPLOAD EXCEL --}}

                            {{-- modal body  ADD SALDO --}}
                            <div class="modal fade" id="managementSaldo" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="managementSaldoLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="managementSaldoLabel">Input Saldo Cuti Karyawan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearForm()">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <input type="hidden" id="id_saldo_cuti">

                                            <div class="form-group">
                                                <input type="hidden" id="nik_selected">
                                                <label>Pilih Karyawan <span class="text-danger">*</span></label>
                                                <select class="form-control select2" id="kt_select2_6" name="key" style="width: 100% !important;">
                                                    <option value="nik"></option>
                                                </select>
                                            </div>

                                            {{-- <div class="form_tipeCuti" style="display: none"> --}}
                                            <div class="form-group" id="select_cuti">
                                                <label>Tipe Absen <span class="text-danger">*</span></label>
                                                <select class="form-control selectpicker" id="nama_tipe_absen" name="nama_tipe_absen">
                                                    <option selected value="">Pilih Tipe Absen</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Saldo Cuti <span class="text-danger">*</span></label>
                                                <input class="form-control bootstrap-touchspin-vertical-btn" id="kt_touchspin_4" placeholder="0" type="number" name="saldo" min="0">
                                                <span id="error-message" class="text-danger"></span>
                                            </div>

                                            <div class="form-group">
                                                <label>Valid From<span class="text-danger">*</span></label>
                                                <div class="input-group date" id="kt_datetimepicker_7_1" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" readonly data-toggle="datetimepicker" placeholder="Valid From" name="valid_from" id="valid_from" data-target="#kt_datetimepicker_7_1" />
                                                    <div class="input-group-append" data-target="#kt_datetimepicker_7_1" data-toggle="datetimepicker">
                                                        <span class="input-group-text">
                                                            <i class="ki ki-calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <span class="form-text text-muted">Please enter start date.</span>
                                            </div>

                                            <div class="form-group" id="end_Date_div">
                                                <label>Valid To<span class="text-danger">*</span></label>
                                                <div class="input-group date" id="kt_datetimepicker_7_2" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" readonly data-toggle="datetimepicker" placeholder="Valid To" name="valid_to" id="valid_to" data-target="#kt_datetimepicker_7_2" />
                                                    <div class="input-group-append" data-target="#kt_datetimepicker_7_2" data-toggle="datetimepicker">
                                                        <span class="input-group-text">
                                                            <i class="ki ki-calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" id="form_periode_tahun">

                                            </div>
                                            <div class="form-group">
                                                <label for="">Maximum Debt <span class="text-danger">*</span></label>
                                                <input class="form-control bootstrap-touchspin-vertical-btn" id="max_hutang" placeholder="0" type="number" name="max_hutang" min="0">
                                                <span id="error-message" class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Valid From Debt <span class="text-danger">*</span></label>
                                                <div class="input-group date" id="kt_datetimepicker_7_3" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" readonly data-toggle="datetimepicker" placeholder="Valid From Debt" name="valid_from_hutang" id="valid_from_hutang" data-target="#kt_datetimepicker_7_3" />
                                                    <div class="input-group-append" data-target="#kt_datetimepicker_7_3" data-toggle="datetimepicker">
                                                        <span class="input-group-text">
                                                            <i class="ki ki-calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold" onclick="clearForm()" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary font-weight-bold" onclick="store()" data-dismiss="modal" id="btn-save">Save</button>
                                            </div>
                                            {{-- </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End- modal body  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end::Entry Dashboard Page-->

    </div>
    <!--end::Content Subheader-->

    <!--begin::Footer-->
    <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
        <!--begin::Container-->
        <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
                <span class="text-muted font-weight-bold mr-2">2023 ©</span>
                <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">PI-Smart</a>
            </div>

            <div class="nav nav-dark order-1 order-md-2">
                <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">Panduan Pengguna</a>
                <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">Kebijakan Privasi</a>
            </div>
            <!--end::Copyright-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Footer-->
    </div>
    <!--end::Wrapper-->
    </div>
    <!--end::Page-->
    </div>
    <!--end::Main-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </div>
    <!--end::Scrolltop-->

    <!--end::Demo Panel-->
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/widgets.js"></script>
    <!--end::Page Scripts-->
    {{-- <script src="assets/js/pages/crud/forms/widgets/select2.js"></script> --}}
    <script src="assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js"></script>
    <script src="https://pismart-dev.pupuk-indonesia.com/public/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    {{-- <script src="assets/js/"></script> --}}

    <script>
        //modal upload file excel
        function uploadeExcel() {
            $('#uploadExcelFile').modal('show');
        }

        $(document).ready(function() {
            $("#excelForm").submit(function(e) {
                e.preventDefault();

                var formData = new FormData($(this)[0]);
                $.ajax({
                    url: '/import',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        // Assuming data is an array, you may need to adjust accordingly
                        $('#kt_datatable').DataTable({
                            data: data,
                            columns: [{
                                    data: 'nik'
                                },
                                {
                                    data: 'tipe_Absen'
                                },
                                {
                                    data: 'saldo'
                                },
                                {
                                    data: 'valid_from'
                                },
                                {
                                    data: 'valid_to'
                                },
                                {
                                    data: 'max_hutang'
                                },
                                {
                                    data: 'valid_from_hutang'
                                },
                                // Add more columns as needed
                            ]
                        });
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>

    {{-- CRUD SCRIPT  --}}
    <script>
        $('#end_Date_div :input').prop('disabled', true);
        var token_oauth = $('#token_oauth').val();
        var emp_no = $("#nik_user").val();
        var company_emp = $("#company").val();
        var comp_code_pegawai = '';
        var perusahaan = '';
        var direktorat = '';
        var kompartemen = '';
        var departemen = '';
        var key = '';

        var current_year = new Date().getFullYear();
        selectYear(current_year)

        var year = $('#absence_year').val();
        $("#absence_year").change(function() {
            year = $('#absence_year').val();
        });

        var form_periode_tahun = $('#pilih_periode_tahun').val();
        $('#pilih_periode_tahun').change(function() {
            form_periode_tahun = $('#pilih_periode_tahun').val();
        });

        let table = $('#kt_datatable').DataTable({
            dom: '<"pull-left"f><"pull-right"l>tip',
            scrollY: '80vh',
            scrollX: true,
            scrollCollapse: true,
            searching: false,
            columnDefs: [{
                className: 'dt-body-nowarp',
                targets: "_all"
            }],
            processing: true,
            bLengthChange: true
        });

        function clearFormReset() {
            $('#perusahaan_key').val('');
            $('#direktorat').empty('');
            $('#kompartemen').empty();
            $('#departemen').empty();
            $('#key_search').val('');
            perusahaan = '';
            direktorat = '';
            kompartemen = '';
            departemen = '';
            key = '';
        }

        function selectYear(year) {
            var start_year = new Date();
            start_year.setFullYear(year - 1)
            var html =
                '<select class="form-control selectpicker" id="absence_year" data-style="btn-primary">' +
                '<optgroup label="Periode Tahun" id="listYear">' +
                '</optgroup>' +
                '</select>'
            $('#selectYear').html(html)
            var get_year = start_year.getFullYear();
            for (let i = 0; i < 3; i++) {
                if (get_year == (current_year)) {
                    $('#listYear').append($("<option></option>").attr({
                        value: get_year,
                        selected: 'selected'
                    }).text('Periode thn ' + get_year));
                } else {
                    $('#listYear').append($("<option></option>").attr('value', get_year).text('Periode thn ' +
                        get_year));
                }
                get_year++
            }
            $('absence_year').selectpicker('refresh')
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //Periode Tahun
        function periodeTahun(periode_awal, periode_akhir, selectedPeriode) {
            var html = `<label>Periode Tahun <span class="text-danger">*</span></label>
                <select class="form-control selectpicker" id="pilih_periode_tahun" name="pilih_periode_tahun">
                    <optgroup label="Pilih Periode Tahun" id="listPeriode"></optgroup>
                </select>`;
            $('#form_periode_tahun').html(html);

            var get_periode = periode_awal - 1;
            while (get_periode <= periode_akhir) {
                if (get_periode == selectedPeriode) {
                    console.log(get_periode);
                    $('#listPeriode').append($("<option></option>").attr({
                        value: get_periode,
                        selected: 'selected'
                    }).text('Periode tahun ' + get_periode));
                } else {
                    console.log(get_periode);
                    $('#listPeriode').append($("<option></option>").attr('value', get_periode).text('Periode tahun ' +
                        get_periode));
                }
                get_periode++;
            }

            $('#pilih_periode_tahun').selectpicker('refresh');
        }

        //read DB
        function readSaldo() {
            key = $('#key_search').val();
            $.ajax({
                type: "post",
                url: "https://601zgltt-9096.asse.devtunnels.ms/api/cuti/listAdminSaldo",
                data: {
                    nik: emp_no,
                    key: key,
                    perusahaan: perusahaan,
                    direktorat: direktorat,
                    kompartemen: kompartemen,
                    departemen: departemen,
                    tahun: year,
                },
                beforeSend: function(xhr) {
                    KTApp.block('#kt_datatable', {
                        overlayColor: '#000000',
                        state: 'danger',
                        message: 'Please wait...',
                        centerY: false,
                        centerX: false,
                        css: {
                            position: 'fixed',
                            margin: 'auto'
                        }
                    });
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                success: function(data) {
                    var arr = data.data
                    table.clear().draw()
                    if (arr.length > 0) {
                        arr.forEach((x, i) => {
                            var iteration = `<span class="font-weight-bold font-size-sm text-dark-50">${i+1}</span>`
                            var employee = `<span class="font-weight-bold font-size-sm text-dark-50">${x.nik} - ${x.nama}</span>`
                            var tipeAbsen = `<span class="font-weight-bold font-size-sm text-dark-50">${x.tipe_absen.nama_tipe_absen}</span>`
                            var saldo = `<span class="font-weight-bold font-size-sm text-dark-50">${x.saldo}</span>`
                            var validFrom = `<span class="font-weight-bold font-size-sm text-dark-50">${x.valid_from}</span>`
                            var validTo = `<span class="font-weight-bold font-size-sm text-dark-50">${x.valid_to}</span>`
                            var periodeThn = `<span class="font-weight-bold font-size-sm text-dark-50">${x.periode}</span>`
                            var maxHutang = `<span class="font-weight-bold font-size-sm text-dark-50">${x.max_hutang}</span>`
                            var validFromHutang = `<span class="font-weight-bold font-size-sm text-dark-50">${x.valid_from_hutang}</span>`
                            var action = `<button type="button" onclick="show('${x.id_saldo_cuti}')" class="btn btn-icon my-2 btn-sm btn-warning">
                                        <i class="flaticon2-edit"></i>
                                    </button> 
                                    <button type="button" onclick="deleteItem('${x.id_saldo_cuti}')" class="btn btn-icon my-2 btn-sm btn-danger">
                                        <i class="flaticon2-trash"></i>
                                    </button>`
                            table.row.add([iteration, employee, tipeAbsen, saldo, validFrom, validTo, periodeThn, maxHutang, validFromHutang, action]).draw(false)
                        });
                    }
                    KTApp.unblock('#kt_datatable');
                },
                error: function(data) {
                    KTApp.unblock('#kt_datatable');
                }
            });
        }

        //create saldo
        function managementSaldo() {
            $('#managementSaldo').modal('show');
        }

        var tipeAbsenSelected = null

        //show untuk edit saldo
        function show(id_saldo_cuti) {
            $.ajax({
                url: "https://601zgltt-9096.asse.devtunnels.ms/api/cuti/getAdminSaldoCuti/" + id_saldo_cuti,
                type: "get",
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                success: function(result) {
                    // Assuming 'exampleModal' is your modal element
                    $('#managementSaldo').modal('show');
                    readSaldo()
                    clearForm()
                    var arr = result.data;
                    $('#id_saldo_cuti').val(arr.id_saldo_cuti);
                    var option = new Option(arr.nik + ' - ' + arr.nama + ' | ' + arr.company.name, arr.nik, true, true);
                    $('#kt_select2_6').append(option).change();
                    tipeAbsenSelected = arr.tipe_absen.id_tipe_absen;
                    console.log(tipeAbsenSelected);
                    $('#kt_touchspin_4').val(arr.saldo);
                    $('#valid_from').val(arr.valid_from);
                    $('#valid_to').val(arr.valid_to);

                    var form_periode_awal = arr.valid_from.substring(0, 4);
                    var form_periode_akhir = arr.valid_to.substring(0, 4);
                    periodeTahun(form_periode_awal, form_periode_akhir, arr.periode);

                    $('#max_hutang').val(arr.max_hutang);
                    $('#valid_from_hutang').val(arr.valid_from_hutang);
                    $('#nama_tipe_absen').prop('disabled', true)
                    $('#kt_select2_6').prop('disabled', true)

                },
                error: function(error) {
                    Swal.fire('Gagal', 'Gagal Menghapus Data', 'error');
                }
            });
        }

        //Untuk delete saldo
        function deleteItem(id_saldo_cuti) {
            // Use SweetAlert to confirm the deletion
            Swal.fire({
                title: 'Apakah anda yakin ingin menghapus kegiatan ini ?',
                text: 'Mohon untuk melakukan pengecekan data kembali',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, Submit!',
                cancelButtonText: 'Batalkan!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send an AJAX request to delete the item
                    $.ajax({
                        url: "https://601zgltt-9096.asse.devtunnels.ms/api/cuti/deleteAdminSaldoCuti/" + id_saldo_cuti,
                        type: 'DELETE',
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                        },
                        success: function(result) {
                            Swal.fire("Berhasil", "Berhasil Menghapus Data", "success");
                            readSaldo()
                        },
                        error: function(data) {
                            Swal.fire("Gagal", "Gagal Menghapus Data", "error");
                            readSaldo(data);
                        }
                    });
                }
            });
        }

        // menyimpan data saldo
        function store() {
            var id_saldo = $('#id_saldo_cuti').val();
            var nik = $('#nik_selected').val();
            var tipe_absen_id = $('#nama_tipe_absen').val();
            var saldo = parseInt($('#kt_touchspin_4').val());
            var valid_from = $('#valid_from').val();
            var valid_to = $('#valid_to').val();
            var form_periode_tahun = $('#pilih_periode_tahun').val();
            var max_hutang = parseInt($('#max_hutang').val());
            var valid_from_hutang = $('#valid_from_hutang').val();

            if (nik === '' || tipe_absen_id === '' || saldo === '' || valid_from === '' || valid_to === '' || form_periode_tahun === '' || max_hutang === '' || valid_from_hutang === '') {
                Swal.fire({
                    title: "Gagal Menyimpan Data",
                    text: "Semua Data Harus Diisi",
                    icon: "warning",
                });
                return; // Hentikan eksekusi jika ada kolom yang kosong
            }

            var storeSaldo = {
                nik: nik,
                tipe_absen_id: tipe_absen_id,
                saldo: saldo,
                valid_from: valid_from,
                valid_to: valid_to,
                periode: form_periode_tahun,
                max_hutang: max_hutang,
                valid_from_hutang: valid_from_hutang,
                created_by: "{{$user['nik']}}"
            }

            if (id_saldo !== '') {
                storeSaldo.id_saldo = id_saldo;
            }

            $.ajax({
                type: "post",
                url: "https://601zgltt-9096.asse.devtunnels.ms/api/cuti/storeAdminSaldo",
                data: JSON.stringify(storeSaldo),
                contentType: "application/json",
                dataType: "json",
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                success: function(response) {
                    readSaldo();
                    $('#managementSaldo').modal('hide');
                    clearForm();
                    Swal.fire({
                        title: "Berhasil",
                        text: "Berhasil Menambahkan Data",
                        icon: "success",
                    });
                }
            });
        }
    </script>

    <script>
        // onchange pilih karyawan
        $('#kt_select2_6').on('change', function() {
            var val = $('#kt_select2_6 option:selected').val();
            $('#nik_selected').val(val);
            if ($('#kt_select2_6').val() != null) {
                getTipeAbsen(val)
            }
        });

        // onchange pilih periode after select valid_from

        //search karyawan
        $("#kt_select2_6").select2({
            placeholder: "Masukkan Nama atau Nomor Pegawai",
            allowClear: true,
            ajax: {
                url: 'https://601zgltt-9096.asse.devtunnels.ms/api/mobile/dataPegawai', // Use the named route to generate the URL
                dataType: 'json',
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                delay: 250,
                data: function(params) {
                    return {
                        key: params.term,
                        page: params.page
                    };
                },
                processResults: function(respon) {
                    return {
                        results: $.map(respon.data, function(item) {
                            return {
                                id: item.nik,
                                text: item.nik + ' - ' + item.nama + ' | ' + item.company_name
                            };
                        })
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            },
            minimumInputLength: 4

        });

        // Get Tipe Absen
        function getTipeAbsen(x) {
            $.ajax({
                type: "get",
                url: "https://601zgltt-9096.asse.devtunnels.ms/api/cuti/getAdminTipeAbsen?nik=" + x,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                success: function(response) {
                    var arr = response.data
                    $('#nama_tipe_absen').html('')
                    var tipeAbsen = '';
                    var awal = '<option value="">Pilih Tipe Absen</option>';
                    $('#nama_tipe_absen').append(awal);

                    arr.forEach((y, i) => {
                        // console.log(y.id_tipe_absen);
                        tipeAbsen += "<option value='" + y.id_tipe_absen + "'>" + y.nama_tipe_absen + "</option>";
                    });
                    if (arr != null) {
                        comp_code_pegawai = arr[0].comp_code
                    };
                    $('#nama_tipe_absen').append(tipeAbsen);
                    $('#nama_tipe_absen').selectpicker("refresh");

                },
                complete: function(data) {
                    if (tipeAbsenSelected != null) {
                        // console.log(tipeAbsenSelected);
                        $('#nama_tipe_absen').val(tipeAbsenSelected).change();
                    }
                }
            });
        }

        getCompany();
        // get Company
        function getCompany() {
            $.ajax({
                type: "get",
                url: "https://601zgltt-9096.asse.devtunnels.ms/api/cuti/getCompany",
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                success: function(response) {
                    var arr = response.data
                    $('#perusahaan_key').empty();
                    var $dataPerusahaan = $('#perusahaan_key')
                    $('#perusahaan_key').append('<option value="">-Pilih Perusahaan-</option>');
                    arr.forEach((x, i) => {
                        $dataPerusahaan += "<option value='" + x.code + "'>" + x.name + "</option>";
                    });
                    $('#perusahaan_key').append($dataPerusahaan);
                },
                error: function(data) {
                    Swal.fire("Tidak Ditemukan", data.responseJSON.keterangan, "error");
                }
            });
        }
        // getDirektorat();

        //Get Direktorat
        function getDirektorat() {
            $.ajax({
                type: "post",
                url: "https://601zgltt-9096.asse.devtunnels.ms/api/cuti/getDirektorat",
                data: {
                    company: perusahaan,
                },
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                success: function(response) {
                    var arr = response.data
                    $('#direktorat').empty();
                    var $dataDirektorat = $('#direktorat')
                    $('#direktorat').append('<option value="">-Pilih Direktorat-</option>');
                    arr.forEach((x, i) => {
                        $dataDirektorat += "<option value='" + x.dir_id + "'>" + x.dir_title + "</option>";
                    });
                    $('#direktorat').append($dataDirektorat);
                },
                error: function(data) {
                    Swal.fire("Tidak Ditemukan", data.responseJSON.keterangan, "error");
                }
            });
        }

        //Get Kompartemen
        function getKompartemen() {
            $.ajax({
                type: "post",
                url: "https://601zgltt-9096.asse.devtunnels.ms/api/cuti/getKompartemen",
                data: {
                    company: perusahaan,
                    direktorat: direktorat,
                },
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                success: function(response) {
                    var arr = response.data

                    $('#kompartemen').empty();
                    var $dataKompartemen = $('#kompartemen')
                    $('#kompartemen').append('<option value="">-Pilih Kompartemen-</option>');
                    arr.forEach((x, i) => {
                        $dataKompartemen += "<option value='" + x.komp_id + "'>" + x.komp_title + "</option>";
                    });
                    $('#kompartemen').append($dataKompartemen);
                },
                error: function(data) {
                    Swal.fire("Tidak Ditemukan", data.responseJSON.keterangan, "error");
                }
            });
        }

        //Get Departemen
        function getDepartemen() {
            $.ajax({
                type: "post",
                url: "https://601zgltt-9096.asse.devtunnels.ms/api/cuti/getDepartemen",
                data: {
                    company: perusahaan,
                    kompartemen: kompartemen,
                },
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                success: function(response) {
                    var arr = response.data

                    $('#departemen').empty();
                    var $dataDepartemen = $('#departemen')
                    $('#departemen').append('<option value="">-Pilih Departemen-</option>');
                    arr.forEach((x, i) => {
                        $dataDepartemen += "<option value='" + x.dept_id + "'>" + x.dept_title + "</option>";
                    });
                    $('#departemen').append($dataDepartemen);
                },
                error: function(data) {
                    Swal.fire("Tidak Ditemukan", data.responseJSON.keterangan, "error");
                    handleUnauthorized(data);
                }
            });
        }

        function getValPerusahaan(data) {
            $('#perusahaan_key').val(data.value);
            perusahaan = data.value;
            getDirektorat();
            $('#direktorat').empty();
            $('#kompartemen').empty();
            $('#departemen').empty();
            direktorat = '';
            kompartemen = '';
            departemen = '';
        }

        function getValDirektorat(data) {
            $('#direktorat').val(data.value);
            direktorat = data.value;
            getKompartemen();
            $('#kompartemen').empty();
            $('#departemen').empty();
            kompartemen = '';
            departemen = '';
        }

        function getValKompartemen(data) {
            $('#kompartemen').val(data.value);
            kompartemen = data.value;
            getDepartemen()
            $('#departemen').empty();
            departemen = '';
        }

        function getValDepartemen(data) {
            $('#departemen').val(data.value);
            departemen = data.value;
        }

        $('#kt_datetimepicker_7_1').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#kt_datetimepicker_7_2').datetimepicker({
            useCurrent: false,
            format: 'YYYY-MM-DD'
        });
        $('#kt_datetimepicker_7_3').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $('#kt_datetimepicker_7_1').on('change.datetimepicker', function(event) {
            // Get the selected date
            var selectedDate = event.date.toDate();
            var form_periode_awal = selectedDate.getFullYear();

            // Add 1 or 2 years to the selected date based on the condition
            var endDate = new Date();
            if (comp_code_pegawai == 'A000') {
                endDate.setFullYear(selectedDate.getFullYear() + 1, selectedDate.getMonth(), selectedDate.getDate());
            } else {
                endDate.setFullYear(selectedDate.getFullYear() + 2, selectedDate.getMonth(), selectedDate.getDate());
            }

            // Format the endDate as a string in the format 'YYYY-MM-DD' and set it to the 'valid_to' input
            $('#valid_to').val(endDate.toISOString().slice(0, 10));
            var form_periode_akhir = endDate.getFullYear();
            var pilihan_periode = form_periode_awal;

            periodeTahun(form_periode_awal, form_periode_akhir, pilihan_periode);
        });

        // input saldo field
        $('#kt_touchspin_4').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',
            verticalbuttons: true,
            verticalup: '<i class="ki ki-plus"></i>',
            verticaldown: '<i class="ki ki-minus"></i>'
        });
        $('#max_hutang').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',
            verticalbuttons: true,
            verticalup: '<i class="ki ki-plus"></i>',
            verticaldown: '<i class="ki ki-minus"></i>'
        });

        function clearForm() {
            $('#kt_select2_6').val('').change();
            $('#kt_select2_6').prop('disabled', false)
            $('#nama_tipe_absen').prop('disabled', false)
            $('#nama_tipe_absen').val('').change();
            $('#nik_selected').val('');
            $('#kt_touchspin_4').val('');
            $('#valid_from').val('');
            $('#valid_to').val('');
            $('#form_periode_tahun').empty();
            $('#max_hutang').val('');
            $('#valid_from_hutang').val('');
        }

        function btnCondition() {
            var check = $('#kt_select2_6 option:selected').is(':checked')
            if (check == true) {
                $('#nama_tipe_absen').prop('disabled', false)
            } else {
                $('#nama_tipe_absen').prop('disabled', true)

            }
        }
    </script>
    <script>
        var currentRoute = window.location.href;

        // Remove the 'menu-item-active' class from all menu items
        $('ul.menu-nav li.menu-item').removeClass('menu-item-active');

        // Add the 'menu-item-active' class to the corresponding menu item based on the current route
        if (currentRoute === "{{route('dashboard_absen')}}") {
            // console.log("A");
            $('#menu-item-dashboard').addClass('menu-item-active');
        } else if (currentRoute === "{{route('pengajuan_absen')}}") {
            // console.log("B");
            $('#menu-item-pengajuan-absen').addClass('menu-item-active');
        } else if (currentRoute === "{{route('absence_approver')}}") {
            // console.log("C");
            $('#menu-item-absence-approver').addClass('menu-item-active');
        } else if (currentRoute === "{{route('management_saldo')}}") {
            // console.log("D");
            $('#menu-item-management-saldo').addClass('menu-item-active');
        }
    </script>

</body>
@endsection