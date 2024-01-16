<style>
    .input-group {
    position: relative;
}

.input-group-addon {
    position: absolute;
    top: 50%;
    right: 10px; /* Adjust the right spacing as needed */
    transform: translateY(-50%);
    cursor: pointer; /* Add cursor pointer for better usability */
}

</style>
@extends('KalibrasiLayout.tempKalibrasi')

@section('kalibrasiPage')

<body id="kt_body" class="page-loading-enabled quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-minimize-hoverable aside-fixed">
    <script>
        document.title = 'Dashboard Calibration | PI-Smart'
    </script>
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
        <!--begin::Logo-->
        <div class="mobile-logo">
            <a href="https://pismart-dev.pupuk-indonesia.com">
            </a>
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

            {{-- <!--begin::Aside use include in layout.sidebarAbsence-->
            <!--end::Aside--> --}}
            @include('KalibrasiLayout.sidebarKalibrasi')

            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                {{-- <!--begin::Navbar use include in layout.navbar-->
                <!--end::Navbar--> --}}

                <!--begin::Content Subheader-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 subheader-solid" id="kt_subheader">
                        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center flex-wrap mr-1">
                                <!--begin::Page Title-->
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard Calibration</h5>
                                <!--end::Page Title-->
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Subheader-->

                    <!--begin::Entry Dashboard Page-->
                    <div class="d-flex flex-column-fluid">
                        <div class="container-fluid">
                            <div class="d-flex flex-column-fluid">
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <!--begin::Stats Widget 4-->
                                            <div class="card card-custom card-stretch gutter-b">
                                                <!--begin::Body-->
                                                <div class="card-body d-flex align-items-center py-0 mt-8">
                                                    <div class="d-flex flex-column flex-grow-1 mb-5 py-2 py-lg-5">
                                                        <a href="#" class="card-title font-weight-boldest mb-1 text-hover-primary" style="font-size: 35px; color: #CE0628;">35</a>
                                                        <span class="font-weight-bold text-muted font-size-lg">Belum di Pool</span>
                                                    </div>
                                                    <!-- <img src="http://pismart-web:8888/public/assets/media/svg/avatars/004-boy-1.svg" alt="" class="align-self-end h-100px"> -->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Stats Widget 4-->
                                        </div>
                                        <div class="col-xl-4">
                                            <!--begin::Stats Widget 5-->
                                            <div class="card card-custom card-stretch gutter-b">
                                                <!--begin::Body-->
                                                <div class="card-body d-flex align-items-center py-0 mt-8">
                                                    <div class="d-flex flex-column flex-grow-1 mb-5 py-2 py-lg-5">
                                                        <a href="#" class="card-title font-weight-boldest mb-1 text-hover-primary" style="font-size: 35px; color:#46BB3E;">105</a>
                                                        <span class="font-weight-bold text-muted font-size-lg">Sudah di Pool</span>
                                                    </div>
                                                    <!-- <img src="http://pismart-web:8888/public/assets/media/svg/avatars/004-boy-1.svg" alt="" class="align-self-end h-100px"> -->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Stats Widget 5-->
                                        </div>
                                        
                                        <div class="col-xl-4">
                                            <!--begin::Stats Widget 6-->
                                            <div class="card card-custom card-stretch gutter-b">
                                                <!--begin::Body-->
                                                <div class="card-body d-flex align-items-center py-0 mt-8">
                                                    <div class="d-flex flex-column flex-grow-1 mb-5 py-2 py-lg-5">
                                                        <a href="#" class="card-title font-weight-boldest mb-1 text-hover-primary" style="font-size: 35px; color: #2D50A0;">255</a>
                                                        <span class="font-weight-bold text-muted font-size-lg">Sudah di Kalibrasi</span>
                                                    </div>
                                                    <!-- <img src="http://pismart-web:8888/public/assets/media/svg/avatars/004-boy-1.svg" alt="" class="align-self-end h-100px"> -->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Stats Widget 6-->
                                        </div>
                                    </div>
                                    
                                    <div class="card card-custom gutter-b">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <label>Dashboard Calibration</label>
                                            </div>
                                            <div class="card-toolbar">
                                                <button type="button" class="btn btn-primary btn-sm font-weight-bold" onclick="clearForm()" data-toggle="modal" data-target="#addCalibration">
                                                    <i class="flaticon2-plus icon-sm"></i> Tambah Kalibrasi
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-head-bg table-hover text-center table-vertical-center" id="kt_datatable">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th style="min-width: 5px; color:black!important;">No</th>
                                                            <th style="min-width: 100px; color:black!important;">Nama Batch</th>
                                                            <th style="min-width: 100px; color:black!important;">Tanggal Dibuat</th>
                                                            <th style="min-width: 100px; color:black!important;">Status</th>
                                                            <th style="min-width: 80px; color:black!important;">Dikalibrasi Oleh</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd">
                                                            <td class="dt-body-nowarp sorting_1">1</td>
                                                                <td class=" dt-body-nowarp font-weight-bolder">Kalibrasi Departemen SDM/ Budaya & 
                                                                    Pembelajaran <i class="flaticon-eye" style="color: black"></i>
                                                                </td>
                                                                <td class=" dt-body-nowarp font-weight-bolder">10/11/2023</td>
                                                                <td class=" dt-body-nowarp">
                                                                    <span class="label label-danger label-inline font-weight-bolder" style="color:#ffff; background-color:#FFA52B;">Drafted</span>
                                                                
                                                                </td>
                                                                <td class=" dt-body-nowarp font-weight-bolder">Martha Aliya</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="dt-body-nowarp sorting_1">2</td>
                                                                <td class=" dt-body-nowarp font-weight-bolder">Kalibrasi Departemen Transformasi
                                                                    Bisnis/ Digitalisasi & Data Science <i class="flaticon-eye" style="color: black"></i>
                                                                </td>
                                                                <td class=" dt-body-nowarp font-weight-bolder">10/11/2023</td>
                                                                <td class=" dt-body-nowarp">
                                                                    <span class="label label-danger label-inline font-weight-bolder" style="color:#ffff; background-color:#1FC5BD;">Calibrated</span>
                                                                
                                                                </td>
                                                                <td class=" dt-body-nowarp font-weight-bolder">Agus Salim</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>

                         {{-- modal body  ADD SALDO --}}
                         <div class="modal fade" id="addCalibration" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="addCalibrationLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addCalibrationLabel">Tambah Kalibrasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearForm()">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <input type="hidden" id="id_saldo_cuti">

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Nama Batch</label>
                                                    <input class="form-control form-control-md" type="text" placeholder="Tulis Nama Batch">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Tanggal Dibuat</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" style="border-radius: 0.42rem;" placeholder="Pilih Tanggal" id="kt_datepicker_1" />
                                                        <span class="input-group-addon">
                                                            <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4.16667 10.2C3.93056 10.2 3.73278 10.1184 3.57333 9.9552C3.41389 9.792 3.33389 9.59027 3.33333 9.35C3.33333 9.10917 3.41333 8.90743 3.57333 8.7448C3.73333 8.58217 3.93111 8.50057 4.16667 8.5C4.40278 8.5 4.60083 8.5816 4.76083 8.7448C4.92083 8.908 5.00056 9.10973 5 9.35C5 9.59083 4.92 9.79285 4.76 9.95605C4.6 10.1192 4.40222 10.2006 4.16667 10.2ZM7.5 10.2C7.26389 10.2 7.06611 10.1184 6.90667 9.9552C6.74722 9.792 6.66722 9.59027 6.66667 9.35C6.66667 9.10917 6.74667 8.90743 6.90667 8.7448C7.06667 8.58217 7.26444 8.50057 7.5 8.5C7.73611 8.5 7.93417 8.5816 8.09417 8.7448C8.25417 8.908 8.33389 9.10973 8.33333 9.35C8.33333 9.59083 8.25333 9.79285 8.09333 9.95605C7.93333 10.1192 7.73555 10.2006 7.5 10.2ZM10.8333 10.2C10.5972 10.2 10.3994 10.1184 10.24 9.9552C10.0806 9.792 10.0006 9.59027 10 9.35C10 9.10917 10.08 8.90743 10.24 8.7448C10.4 8.58217 10.5978 8.50057 10.8333 8.5C11.0694 8.5 11.2675 8.5816 11.4275 8.7448C11.5875 8.908 11.6672 9.10973 11.6667 9.35C11.6667 9.59083 11.5867 9.79285 11.4267 9.95605C11.2667 10.1192 11.0689 10.2006 10.8333 10.2ZM1.66667 17C1.20833 17 0.816111 16.8337 0.49 16.501C0.163889 16.1684 0.000555556 15.7681 0 15.3V3.4C0 2.9325 0.163333 2.53243 0.49 2.1998C0.816667 1.86717 1.20889 1.70057 1.66667 1.7H2.5V0H4.16667V1.7H10.8333V0H12.5V1.7H13.3333C13.7917 1.7 14.1842 1.8666 14.5108 2.1998C14.8375 2.533 15.0006 2.93307 15 3.4V15.3C15 15.7675 14.8369 16.1678 14.5108 16.501C14.1847 16.8342 13.7922 17.0006 13.3333 17H1.66667ZM1.66667 15.3H13.3333V6.8H1.66667V15.3Z" fill="#7A8CAC"/>
                                                             </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Dikalibrasi Oleh</label>
                                                    <input class="form-control form-control-md" type="text" placeholder="Masukkan Nama">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Departemen</label>
                                                    <select class="form-control selectpicker">
                                                        <option value="">Pilih Departemen</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Kompartemen</label>
                                                    <select class="form-control selectpicker">
                                                        <option value="">Pilih Kompartemen</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Grade</label>
                                                    <select class="form-control selectpicker">
                                                        <option value="">Pilih Grade</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
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
    <script src="assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js"></script>
    <script src="https://pismart-dev.pupuk-indonesia.com/public/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>


    <script>

        $(document).ready(function () {
            $('#kt_datepicker_1').datepicker({
                format: 'DD-MM-YYYY'
             });
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

        function addCalibration() {
            $('#addCalibration').modal('show');
        }

        function clearForm() {

        }
        function store() {

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